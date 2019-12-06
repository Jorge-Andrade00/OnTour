<?php

class RepositorioUsuario {

    public static function insertar_usuario($conexion, $usuario) {
        $usuario_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO USUARIO(nombre_usuario, correo_ususario, pass_usuario, fecha_registro, activo) VALUES (:nombre_usuario, :correo_ususario, :pass_usuario, NOW(), 0)";
                $sentencia = $conexion->prepare($sql);

                $nombre = $usuario ->obtener_nombre();
                $email = $usuario->obtener_email();
                $password = $usuario->obtener_password(); 
                
                
                $sentencia -> bindParam(':nombre_usuario', $nombre, PDO::PARAM_STR);
                $sentencia -> bindParam(':correo_ususario', $email, PDO::PARAM_STR);
                $sentencia -> bindParam(':pass_usuario', $password, PDO::PARAM_STR);

                $usuario_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }

        return $usuario_insertado;
    }
    
    public static function nombre_existe($conexion,$nombre)
    {
        $nombre_existe = true;
        
        if(isset($conexion))
        {
            try
            {
                $sql = "SELECT * FROM USUARIO WHERE nombre_usuario = :nombre_usuario";
                $sentencia = $conexion -> prepare($sql);
                
                $sentencia -> bindParam(':nombre_usuario',$nombre, PDO::PARAM_STR);
                
                $sentencia -> execute();
                
                $resultado = $sentencia -> fetchAll();
                
                if(count($resultado))
                {
                    $nombre_existe = true;
                }
                else
                {
                    $nombre_existe = false;
                }
            } catch (PDOException $ex) 
            {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $nombre_existe;
    }
    
    public static function email_existe($conexion,$email)
    {
        $email_existe = true;
        
        if(isset($conexion))
        {
            try
            {
                $sql = "SELECT * FROM USUARIO WHERE correo_ususario = :correo_ususario";
                $sentencia = $conexion -> prepare($sql);
                
                $sentencia -> bindParam(':correo_ususario',$email, PDO::PARAM_STR);
                
                $sentencia -> execute();
                
                $resultado = $sentencia -> fetchAll();
                
                if(count($resultado))
                {
                    $email_existe = true;
                }
                else
                {
                    $email_existe = false;
                }
            } catch (PDOException $ex) 
            {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $email_existe;
    }
    
    public static function obtener_usuario_por_email($conexion, $email)
    {
        $usuario = null;
        
        if(isset($conexion))
        {
            try 
            {
                $sql = "SELECT * FROM USUARIO WHERE correo_ususario = :correo_ususario";
                $sentencia = $conexion -> prepare($sql);
                
                $sentencia -> bindParam(':correo_ususario',$email, PDO::PARAM_STR);
                
                $sentencia -> execute();
                
                $resultado = $sentencia -> fetch();
                
                if(!empty($resultado))
                {
                    $usuario = new Usuario($resultado['id_usuario'],
                            $resultado['nombre_usuario'],
                            $resultado['correo_ususario'],
                            $resultado['pass_usuario'],
                            $resultado['fecha_registro'],
                            $resultado['activo']);
                }
                
            } catch (PDOException $ex) 
            {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario;
    }

}
