<?php
class Conexion
{
    public static function conectar()
    {
        $con = mysqli_init();
        mysqli_ssl_set($con,NULL,NULL, "SSL/DigiCertGlobalRootCA.crt", NULL, NULL);
        mysqli_real_connect($conn, "papeleriadb.mysql.database.azure.com", "administrador", "LN123456*", "db_papeleria", 3306, MYSQLI_CLIENT_SSL);
    }
}
