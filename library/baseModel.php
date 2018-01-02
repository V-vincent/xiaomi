<?php
// 类，智能多态
class baseModel{
    private $link=null;// 数据库连接
    private $pdoStatement=null;// 数据库结果集
    private $dbhost = null;
    private $dbname = null;
    private $dbuser = null;
    private $dbpwd = null;
    private $error_grade=[];
    private $base_where_sql = '';
    // 构造函数
    // 特点：1、在类实例化的时候该函数被自动调用
    // 2、初始化事情
    // 3、被继承的时候也会自动执行
    function __construct(){
        global $_CONFIG;
        $this->dbhost = $_CONFIG['dbhost'];
        $this->dbname =$_CONFIG['dbname'] ;
        $this->dbuser = $_CONFIG['dbuser'];
        $this->dbpwd = $_CONFIG['dbpwd'];
        if ($_CONFIG['debug']) {
            $this->error_grade = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        }
        $this->link = new PDO("mysql:dbhost=".$this->dbhost.";dbname=".$this->dbname.";
        charset=utf8",$this->dbuser,$this->dbpwd,$this->error_grade);
    }
    //执行一条sql语句
    public function query_sql($sql){
        try {
            $this->pdoStatement = $this->link->prepare($sql);
            $this->pdoStatement->execute();
        } catch (PDOException $e) {
            // 记录日志 .log
            echo "sql语句有误:".$sql;
        }
    }
    /**
     * 把条件数组或更新的数组转换为指定格式的字符串
     * @param  array $data 数据
     * @param  string $fenge_str  分割符号（and、,）
     * @param  has_key $has_key  是否要键
     * @return string             指定格式的字符串
     */
    public function arrayToString($data,$fenge_str="and",$has_key=true){
        if (!empty($this->base_where_sql)) {
            $temp_sql = $this->base_where_sql;
            unset($this->base_where_sql);
            return $temp_sql;
        }
        $where_sql = '';
        if (!empty($data)) {
            $where_sql = $fenge_str == 'and'?'where ':'';
            $and_str = '';
            foreach ($data as $key => $value) {
                if ($has_key) {
                    $where_sql .= $and_str."  $key = '$value' ";
                }else{
                    $where_sql .= $and_str." '$value' ";
                }
                $and_str = $fenge_str;
            }
        }
        return $where_sql;
    }
    /**
     * 查询一条记录
     * @param  string $table_name 表名
     * @param  array $where_data 条件参数
     * @param  string $fields 要查的具体字段
     * @return array             一条记录
     */
    public function find($table_name,$where_data='',$fields='*'){
        $where_sql = $this->arrayToString($where_data);
        $sql = "select $fields from $table_name $where_sql";
        $this->query_sql($sql);
        return $this->pdoStatement->fetch();//单条
    }
    /**
     * 查询多条记录
     * @param  string $table_name 表名
     * @param  array $where_data 条件参数
     * @param  string $fields 要查的具体字段
     * @return array             多条记录
     */
    public function select($table_name,$where_data='',$fields='*'){
        $where_sql = $this->arrayToString($where_data);
        $sql = "select $fields from $table_name $where_sql";
        $this->query_sql($sql);
        return $this->pdoStatement->fetchAll();//多条
    }
    /**
     * 修改
     * @param  string $table_name  表名
     * @param  array $update_data 被更新的字段和值
     * @param  array $where_data  条件数组
     */
    public function update($table_name,$update_data,$where_data){
        $update_sql = $this->arrayToString($update_data,",");
        $where_sql = $this->arrayToString($where_data,"and");
        $sql="update $table_name set $update_sql $where_sql";
        $this->query_sql($sql);
    }
    /**
     * 删除
     * @param  string $table_name 表名
     * @param  array $where_data 条件数组
     */
    public function delete($table_name,$where_data){
        $where_sql = $this->arrayToString($where_data,"and");
        $sql="delete from $table_name $where_sql";
        $this->query_sql($sql);
    }
    /**
     * 添加
     * @param  string $table_name 表名
     * @param  array $add_data   添加的数组
     */
    public function insert($table_name,$add_data){
        // insert into 表名 (列名1,列名2....) values (值1,值2....)
        $col_str = $this->arrayToString(array_keys($add_data),",",false);
        $col_str = str_replace("'", "", $col_str);
        $val_str = $this->arrayToString(array_values($add_data),",",false);
        $sql = "insert into $table_name ($col_str) values($val_str)";
        $this->query_sql($sql);
    }

    public function getLastInsertId(){
        $this->query_sql("select LAST_INSERT_ID()");
        return $this->pdoStatement->fetch();
    }

    public function model($model_name){
        $model_name = $model_name.'Model';
        $filename  = "model/".$model_name.".php";
        if (file_exists($filename)) {
            include_once "$filename"; //当调用多次方法的时候，只引入一次文件
            if (class_exists($model_name)) {
                return new $model_name();
            }
        }
    }
    /**
     * 链式操作条件
     * @param  string $where_sql 条件sql
     * @return object             当前对象
     */
    public function where($where_sql){
        $this->base_where_sql = 'where '.$where_sql;
        return $this;
    }


}