<?php

namespace App\Models;

use App\Config\ResponseHttp;
use App\Config\Security;
use App\Database\Connection;
use App\Database\Query;
use App\Database\Sql;

class ClienteModel extends  Connection
{

    private static int    $id;
    private static int    $idTipoDoc;
    private static string $numDoc;
    private static string $nombres;
    private static string $apellidos;
    private static string $telefono;
    private static string $fechaNacimiento;
    private static string $genero;
    private static int $idUsuario;

    public function __construct(array $data)
    {

        self::$nombres   = $data['nombres'];
        self::$apellidos = $data['apellidos'];
        self::$idUsuario = $data['idUsuario'];
    }



    final public static function create()
    {
        try {
            $con = self::getConnection();
            $sql = "INSERT INTO Clientes (nombres, apellidos, idUsuario) VALUES (:nombres,:apellidos,:idUsuario)";
            $query = $con->prepare($sql);
            $query->execute([
                ':nombres'  => self::getNombres(),
                ':apellidos' => self::getApellidos(),
                ':idUsuario' => self::getIdUsuario(),
            ]);
            if ($query->rowCount() > 0) {
                return $con->lastInsertId();
            } else {
                return 0;
            }
        } catch (\PDOException $e) {
            error_log('UserModel::post -> ' . $e);
            die(json_encode(ResponseHttp::status500()));
        }
    }

    final public static function getClientByIdUser($idUser)
    {
        try {
            $con = self::getConnection()->prepare("SELECT * FROM Clientes WHERE idUsuario = :idUsuario");
            $con->execute([
                ':idUsuario' => (int) $idUser
            ]);

            if ($con->rowCount() === 0) {
                echo ResponseHttp::status400('Cliente no encontrado');
            } else {
                $data = $con->fetch();
                if (count($data) > 0) {
                    return $data;
                } else {
                    echo ResponseHttp::status400('Cliente no encontrado');
                }
            }
        } catch (\PDOException $e) {
            error_log("UserModel::Login -> " . $e);
            die(json_encode(ResponseHttp::status500()));
        }
        exit;
    }

    final public static function getId()
    {
        return self::$id;
    }

    final public static function setId($id)
    {
        self::$id = $id;
    }

    final public static function getIdTipoDoc()
    {
        return self::$idTipoDoc;
    }

    final public static function setIdTipoDoc($idTipoDoc)
    {
        self::$idTipoDoc = $idTipoDoc;
    }

    final public static function getNumDoc()
    {
        return self::$numDoc;
    }

    final public static function setNumDoc($numDoc)
    {
        self::$numDoc = $numDoc;
    }

    final public static function getNombres()
    {
        return self::$nombres;
    }

    final public static function setNombres($nombres)
    {
        self::$nombres = $nombres;
    }

    final public static function getApellidos()
    {
        return self::$apellidos;
    }

    final public static function setApellidos($apellidos)
    {
        self::$apellidos = $apellidos;
    }

    final public static function getTelefono()
    {
        return self::$telefono;
    }

    final public static function setTelefono($telefono)
    {
        self::$telefono = $telefono;
    }

    final public static function getFechaNacimiento()
    {
        return self::$fechaNacimiento;
    }

    final public static function setFechaNacimiento($fechaNacimiento)
    {
        self::$fechaNacimiento = $fechaNacimiento;
    }

    final public static function getGenero()
    {
        return self::$genero;
    }

    final public static function setGenero($genero)
    {
        self::$genero = $genero;
    }

    final public static function getIdUsuario()
    {
        return self::$idUsuario;
    }

    final public static function setIdUsuario($idUsuario)
    {
        self::$idUsuario = $idUsuario;
    }
}