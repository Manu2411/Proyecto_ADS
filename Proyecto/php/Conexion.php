<?php

    //función que obtiene la conexión al servidor y selecciona la base de datos
    function conectar(){
        //usuario creado con privilegios limitados
        $user = "root"; 
        $pass = ""; 
        $server = "localhost";
        
        //base de datos
        $basededatos = "sirama"; //Nombre base de datos
        
        //sentencia mysql y validación
        $q = mysqli_connect($server, $user, $pass, $basededatos, "3308") or die ("No se pudo establecer coexión al servidor: " . mysqli_error());
        
        // $q = mysqli_connect($server, $user, $pass, $basededatos) or die ("No se pudo establecer coexión al servidor: " . mysqli_error()); // <-- Utilizar esta si no funciona la conexion que esta arriba.
        
        return $q;
    }
    
    /* Aqui comienza para la extraccion de datos para el index */

    //Titulo Enunciado
    function obtenertitulo1($Id_Enun){
        $con = conectar();

        $q = "Select Titulo From enunciados Where Id_Enun = '$Id_Enun'";

        $re =  mysqli_query($con, $q);

        while ($colum = mysqli_fetch_array($re)) {
            $Titu1 = $colum['Titulo'];
        }

        return $Titu1;
    }

    function imprimirtitulo1($Id_Enun){

        $Titu1 = obtenertitulo1($Id_Enun);

        $impri = "<h1 class='text-uppercase text-white font-weight-bold'>" . $Titu1 . "</h1>";

        return $impri;
    }
    // Finaliza codigo para titulo enunciado


    //Descripcion Enunciado
        function obtenerdescripcion1($Id_Enun){
            $con = conectar();

            $q = "Select Descripcion From enunciados Where Id_Enun = '$Id_Enun'";

            $re =  mysqli_query($con, $q);

            while ($colum = mysqli_fetch_array($re)) {
                $Des1 = $colum['Descripcion'];
            }

            return $Des1;
        }

        function imprimirdescripcion1($Id_Enun){

            $Des1 = obtenerdescripcion1($Id_Enun);

            $impri1 = "<p class='text-white-75 font-weight-light mb-5'>" . $Des1 . "</p>";

            return $impri1;
        }

    //Finaliza codigo para Descripcion enunciado

    //Banner Enunciado
        function obtenerBanner($Id_Enun){
            $con = conectar();

            $q = "Select Banner From enunciados Where Id_Enun = '$Id_Enun'";

            $re =  mysqli_query($con, $q);

            while ($colum = mysqli_fetch_array($re)) {
                $Ban = $colum['Banner'];
            }

            return $Ban;
        }

        function imprimirBanner($Id_Enun){

            $Bann = obtenerBanner($Id_Enun);

            $impri = $Bann;

            return $impri;
        }

    //Finaliza código para Banner enunciado
    

    //Codigo de extraccion de NOTICIAS 

        //Noticia1

        //Titulo
        function obtenerTitu_Noti1($IdNot){
            $cone = conectar();

            $q = "select Titulo from noticias Where lugar_noti = '$IdNot' && estado = '1' ";

            $r = mysqli_query($cone, $q);

            while ($col = mysqli_fetch_array($r)) {

                    $Tit1 = $col['Titulo'];

            }

            return $Tit1;
        }

        function imprimirTitu_Noti1($IdNot){

            $Tit1 = obtenerTitu_Noti1($IdNot);

                    $impri1 = "<h3 class='h4 mb-2'>" . $Tit1 . "</h3>";

            return $impri1;
        }

        //Para titulo del modal 
        function imprimirTi_Noti1($id){

            $Tit01 = obtenerTitu_Noti1($id);

            $impri = "<h5 class='modal-title' id='solicitarLabel'>" . $Tit01 . "</h5>";

            return $impri;
        }

        //Descripcion
        function obtenerDes_Noti1($IdNot){
            $cone = conectar();

            $q = "select Descripcion from noticias Where lugar_noti = '$IdNot' && estado = '1' ";

            $r = mysqli_query($cone, $q);

            while ($col = mysqli_fetch_array($r)) {
                $Des1 = $col['Descripcion'];
            }

            return $Des1;
        }

        function imprimirDes_Noti1($IdNot){

            $Des1 = obtenerDes_Noti1($IdNot);

            $impri1 = "<p class='text-muted mb-0'>" . $Des1 . "</p>";

            return $impri1;
        }

        //Contenido
        function obtenerCon_Noti1($IdNot){
            $cone = conectar();

            $q = "select Contenido from noticias Where lugar_noti = '$IdNot' && estado = '1' ";

            $r = mysqli_query($cone, $q);

            while ($col = mysqli_fetch_array($r)) {
                $Con1 = $col['Contenido'];
            }

            return $Con1;
        }

        function imprimirCon_Noti1($IdNot){

            $Con1 = obtenerCon_Noti1($IdNot);

            $impri1 = "<p class='text-muted mb-0'>" . $Con1 . "</p>";

            return $impri1;
        }
        //Fin Noticia 1

    //Finaliza extraccion de noticias
    
    /* Aqui finaliza la extraccion de datos para el index */

    /* Aquí empieza las funciones para la extracción de datos para la página de cursos*/

         // Nombre de curso
        function obtenerNombre($IdNom){

            $cone = conectar();

            $q = "select Nombre FROM cursos WHERE lugar_curso = '$IdNom' && Estado = '1'";

            $r = mysqli_query($cone, $q);

            while ($col = mysqli_fetch_array($r)) {
                $Nombre = $col['Nombre'];
            }

            return $Nombre;
        }

        function imprimirNombre($IdName){

            $Name = obtenerNombre($IdName);

            $impri = $Name;

            return $impri;
        }
        // Final de las funciones para Nombre del curso


        // Descripción de curso
        function obtenerDesc_Cur($IdCurso){

            $cone = conectar();

            $q = "select Descripcion FROM cursos WHERE lugar_curso = '$IdCurso' && Estado = '1'";

            $r = mysqli_query($cone, $q);

            while ($col = mysqli_fetch_array($r)) {
                $Descripcion = $col['Descripcion'];
            }

            return $Descripcion;
        }

        function imprimirDescrip($IdCur){

            $Desc = obtenerDesc_Cur($IdCur);

            $impri = $Desc;

            return $impri;
        }
        // Final de las funciones para Descripción del curso


        // Horario de curso
        function obtenerHora($IdCurso){

            $cone = conectar();

            $q = "select Horario FROM cursos WHERE lugar_curso = '$IdCurso' && Estado = '1'";

            $r = mysqli_query($cone, $q);

            while ($col = mysqli_fetch_array($r)) {
                $Hora = $col['Horario'];
            }

            return $Hora;
        }

        function imprimirHorario($IdCur){

            $Hora = obtenerHora($IdCur);

            $impri = $Hora;

            return $impri;
        }
        // Final de las funciones para Horario del curso


        // Precio de curso
        function obtenerPrice($IdCurso){

            $cone = conectar();

            $q = "select Precio FROM cursos WHERE lugar_curso = '$IdCurso' && Estado = '1'";

            $r = mysqli_query($cone, $q);

            while ($col = mysqli_fetch_array($r)) {
                $Price = $col['Precio'];
            }

            return $Price;
        }

        function imprimirPrecio($IdCur){

            $Precio = obtenerPrice($IdCur);

            $impri = $Precio;

            return $impri;
        }
        // Final de las funciones para Precio del curso

        //Imagen Curso
            function obtenerImg($IdCurso){
                $con = conectar();

                $q = "select Imagen FROM cursos WHERE lugar_curso = '$IdCurso' && Estado = '1'";

                $re =  mysqli_query($con, $q);

                while ($colum = mysqli_fetch_array($re)) {
                    $Img = $colum['Imagen'];
                }

                return $Img;
            }

            function imprimirImg($IdCurso){

                $Image = obtenerImg($IdCurso);

                $impri = $Image;

                return $impri;
            }

        //Finaliza código para Imagen Curso

    /* Aqui finaliza la extraccion de datos para la página de cursos*/


    /* Aquí empieza las funciones para la extracción de datos para la página de Beneficiarias*/

        // Nombre de la Beneficiaria
        function obtenerNameBene($IdBene){

            $cone = conectar();

            $q = "select Nombre FROM beneficiarias WHERE ubicacion_bene = '$IdBene' && Estado = '1'";

            $r = mysqli_query($cone, $q);

            while ($col = mysqli_fetch_array($r)) {
                $Bene = $col['Nombre'];
            }

            return $Bene;
        }

        function imprimirBeneName($IdBenefi){

            $NameBene = obtenerNameBene($IdBenefi);

            $impri = $NameBene;

            return $impri;
        }
        // Final de las funciones para Nombre de la Beneficiaria

        // Opinion de la Beneficiaria
        function obtenerOpi($IdBene){

            $cone = conectar();

            $q = "select Opinion FROM beneficiarias WHERE ubicacion_bene = '$IdBene' && Estado = '1'";

            $r = mysqli_query($cone, $q);

            while ($col = mysqli_fetch_array($r)) {
                $Opini = $col['Opinion'];
            }

            return $Opini;
        }

        function imprimirOpinion($IdBenefi){

            $Op = obtenerOpi($IdBenefi);

            $impri = $Op;

            return $impri;
        }
        // Final de las funciones para Opinion de la Beneficiaria

        //Foto Bene
            function obtenerFoto($IdBene){
                $con = conectar();

                $q = "select Foto FROM beneficiarias WHERE ubicacion_bene = '$IdBene' && Estado = '1'";

                $re =  mysqli_query($con, $q);

                while ($colum = mysqli_fetch_array($re)) {
                    $Pic = $colum['Foto'];
                }

                return $Pic;
            }

            function imprimirPhoto($IdBene){

                $Pictu = obtenerFoto($IdBene);

                $impri = $Pictu;

                return $impri;
            }

        //Finaliza código para Foto Bene

    /* Aqui finaliza la extraccion de datos para la página de Beneficiarias*/
?>

