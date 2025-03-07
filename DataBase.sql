-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2025 a las 01:08:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piviwnwi_piviweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `Nombre_DUsuario` varchar(100) NOT NULL,
  `Edad_DUsuario` varchar(100) NOT NULL,
  `Telefono_DUsuario` varchar(100) NOT NULL,
  `Nivel_DUsuario` varchar(100) NOT NULL,
  `Carrera_DUsuario` varchar(100) NOT NULL,
  `Conocimiento_DUsuario` varchar(200) NOT NULL,
  `Ciudad_DUsuario` varchar(100) NOT NULL,
  `Minicipio_DUsuario` varchar(100) NOT NULL,
  `TVacante_DUsuario` varchar(100) NOT NULL,
  `Emp_Inst_Vacantes` varchar(100) NOT NULL,
  `Estado_Vacantes` varchar(100) NOT NULL,
  `Delegacion_Vacantes` varchar(100) NOT NULL,
  `Cargo_Vacantes` varchar(100) NOT NULL,
  `Descripcion_Vacantes` varchar(500) NOT NULL,
  `Carrera_Vacantes` varchar(100) NOT NULL,
  `Conocimientos_Vacantes` varchar(500) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `direccion`, `titulo`, `correo`, `Nombre_DUsuario`, `Edad_DUsuario`, `Telefono_DUsuario`, `Nivel_DUsuario`, `Carrera_DUsuario`, `Conocimiento_DUsuario`, `Ciudad_DUsuario`, `Minicipio_DUsuario`, `TVacante_DUsuario`, `Emp_Inst_Vacantes`, `Estado_Vacantes`, `Delegacion_Vacantes`, `Cargo_Vacantes`, `Descripcion_Vacantes`, `Carrera_Vacantes`, `Conocimientos_Vacantes`, `fecha`) VALUES
(47, 'curriculum_vitae/Arthur Ayers_(Vendedor de campo en Hermosillo Sonora)_Curriculum02.pdf', 'Vendedor de campo en Hermosillo Sonora', 'usuario11@piviweb.com', 'Arthur Ayers', '22', '06 67 44 71 64', 'Media Superior', 'Licenciatura en Derecho o Abogado', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Estado_de_Mexico', 'Tonanitla', 'Proyectos', ' Littlerock Elementary', 'Sonora', 'Hermosillo', 'Vendedor de campo', 'Ofrecemos:\r\n• Salario $5,000 Mensual libres\r\n• Comisión mensual 5% de venta de ruta no ganan menos de $10,000.\r\n• Sin prestaciones de ley.\r\n• Contrato por honorarios a través de factura\r\n• Horarios de trabajo abierto (libre)\r\n• Zona de trabajo Hermosillo Sonora', 'Licenciatura en Administración Financiera y Sistemas', 'Requisitos\r\n• Gusto por las ventas\r\n• Gusto por el trabajo en campo\r\n• Búsqueda de nuevo clientes\r\n• Seguimiento continuo', '2023-02-24 20:56:38'),
(46, 'curriculum_vitae/Tyrone Bradford_(Licenciatura en Administración Financiera y Sistemas)_Curriculum01', 'Licenciatura en Administración Financiera y Sistemas', 'usuario12@piviweb.com', 'Tyrone Bradford', '21', '06 42 92 84 99', 'Superior', 'Licenciatura en Diseño de Artesanías', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Guanajuato', 'Yuriria', 'Bolsa de Trabajo', 'Conversation Stage', 'Ciudad_de_Mexico', 'Milpa Alta', 'Licenciatura en Administración Financiera y Sistemas', 'En Transervicios Logísticos del Norte S.A. ofrecemos servicios de transporte de carga terrestre, con cargas regulares o especializadas en toda la República Mexicana.', 'Licenciatura en Ingeniería Civil', 'Nuestro Candidato Ideal:\r\n-Conocimiento en mecanica electrica\r\n-Experiencia previa con mecanica automotriz - electrica\r\n-Conocimiento en gasolina y diesel', '2023-02-24 20:56:02'),
(45, 'curriculum_vitae/Camden Evans_(Representante de atención al cliente)_Curriculum04.pdf', 'Representante de atención al cliente', 'usuario18@piviweb.com', 'Camden Evans', '20', '06 53 15 76 34', 'Superior', 'Licenciatura en Estudios Liberales', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Guerrero', 'Iliatenco', 'Servicio Social', 'Diversity Of Variety', 'Michoacan', 'Arteaga', 'Representante de atención al cliente', '¡Llegamos a México!\r\nSomos una empresa líder en movilidad a nivel LATAM, estamos en búsqueda de Ejecutivos de atención al cliente/ventas para el Aeropuerto.', 'Licenciatura en Sistemas de Información', 'Requerimientos Clave:\r\n· Experiencia mínima de 1 año en atención al cliente y ventas;\r\n· Escuela Secundaria completa;\r\n· Paquetería Office Nivel Básico;\r\n· Licencia de Conducir Tipo B;\r\n· Inglés intermedio/avanzado.\r\n· Proactividad y Comunicación;\r\n· Relación Interpersonal;\r\n· Técnicas de Negociación.\r\n· Disponibilidad de horário para rotar turnos.', '2023-02-24 20:55:26'),
(44, 'curriculum_vitae/Wyatt Roberson_(Analista de transportacion bilingue)_Curriculum03.pdf', 'Analista de transportacion bilingue', 'usuario14@piviweb.com', 'Wyatt Roberson', '31', '05 48 58 73 84', 'Media Superior', 'Licenciatura en Gerontología', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Hidalgo', 'Zimapán', 'Prácticas Profesionales', 'Granite Hills School for Girls', 'Campeche', 'Hopelchén', 'Analista de transportacion bilingue', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas.\r\nApoyo en el area de logistica brindando seguimiento, rastreo, y resolucion de problemas con el cliente', 'Licenciatura en Recursos Humanos', 'Importante empresa transportista LTL líder en transporte de carga fraccionada operando en 30 paises y con mas de 30 años de experiencia, solicita:\r\nAnalista de logística\r\nPrincipales funciones:\r\n- Programación de recolecciones y entregas transporte\r\n- Seguimiento y rastreo de las cajas del cliente\r\n- Contacto con cliente y proveedores\r\n- Resolución de problemas\r\n- Planeacion y programacion de transporte', '2023-02-24 20:54:57'),
(41, 'curriculum_vitae/Kennan Marquez_(ASISTENTE ADMINISTRATIVO)_Curriculum04.pdf', 'ASISTENTE ADMINISTRATIVO', 'usuario16@piviweb.com', 'Kennan Marquez', '28', '01 33 40 78 39', 'Media Superior', 'Licenciatura en Ingeniería en Energía', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Morelos', 'Temoac', 'Proyectos', 'The Stage Space', 'Zacatecas', 'Calera', 'ASISTENTE ADMINISTRATIVO', 'Estamos buscando personal para atención al cliente, seguimiento a llamadas y correos electronicos, asi como para realizar cotizaciones de seguros de diferentes ramos. Otra de las tareas a realizar son tramites administrativos de oficina.', 'Licenciatura en Comunicación Pública', 'Indispensable manejo de Paquete Office, computadora, y articulos de oficina. Deseable conocimiento en seguros.\r\nBuena presentación, trato amable, puntual, responsable y facilidad de palabra. El horario laboral es de lunes a viernes de 9: 0 0 a 1 8: 0 0 hrs.\r\nPreferente solteras y sin hijos. Se ofrecen todas las prestaciones de Ley.', '2023-02-24 20:53:38'),
(42, 'curriculum_vitae/Lucas Vance_(Analista Mesa de control y atención al cliente)_Curriculum01.pdf', 'Analista Mesa de control y atención al cliente', 'usuario15@piviweb.com', 'Lucas Vance', '29', '09 81 72 03 17', 'Superior', 'Licenciatura en Ingeniería en Ciencias Computacionales', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Michoacan', 'José Sixto Verduzco', 'Becarios', 'Lakewood Secondary School', 'Michoacan', 'Ario', 'Analista Mesa de control y atención al cliente', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas.\r\nContro y validaciónd de documentación de los clientes\r\nResponsable de recepción/ gestión de documentos para validar requisitos de la institución, Aclaraciones, Seguimiento para autorización de créditos, Atención y servicio al cliente, Contacto directo con proveedores', 'Licenciatura en Contaduría Pública', 'Nuestro Candidato Ideal:\r\n-En Área administrativa validando documentos\r\n-Minimo Pasantes o estudiante de último año de Ing. o Lic. afín', '2023-02-24 20:54:07'),
(43, 'curriculum_vitae/Lionel Schroeder_(Analista de Documentación)_Curriculum02.pdf', 'Analista de Documentación', 'usuario13@piviweb.com', 'Lionel Schroeder', '30', '02 94 60 64 27', 'Superior', 'Licenciatura en Historia del Arte', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Jalisco', 'San Ignacio Cerro Gordo', 'Residencias Profesionales', 'Emagazines Theater', 'Aguascalientes', 'Calvillo', 'Analista de Documentación', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas.\r\nValidacion, Cotejo y Digitalización de información\r\nValidación de documentación\r\nAnálisis de información\r\nContratación de persona moral\r\nLlenado de bitácoras\r\nAdministración y validación de contratos', 'Licenciatura en Gestión y Economía Ambiental', 'Nuestro Candidato Ideal:\r\n-6 meses en analisando y administración de la información\r\n-Lic. concluida o a 1 año de graduarse en carreras económico-administrativas\r\n-Conocimientos administrativos Excel: intermedio/ Avanzado\r\n-Comunicación efectiva Captura de datos Administración de documentos', '2023-02-24 20:54:28'),
(40, 'curriculum_vitae/Ray Dudley_(Asesor Hipotecario)_Curriculum03.pdf', 'Asesor Hipotecario', 'usuario17@piviweb.com', 'Ray Dudley', '27', '04 52 84 61 31', 'Superior', 'Licenciatura en Ingeniería en Nanotecnología', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Nayarit', 'Bahía De Banderas', 'Bolsa de Trabajo', ' Grapevine University', 'Sonora', 'Banámichi', 'Asesor Hipotecario', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas. En esta ocasion importante empresa bancaria financiera esta buscando talento como broker hipotecario.\r\nBrindar asesoría en materia hipotecaría Colocación de créditos hipotecarios\r\n- Búsqueda y prospección de clientes (Creación de cartera)\r\n- Recolección e integración de la documentación a los expedientes de los clientes.\r\n- Acompañamiento del cliente durante el proceso.\r\n- Crear relaciones ', 'Licenciatura en Ingeniería en Telemática', 'Nuestro Candidato Ideal:\r\n-Experiencia colocando productos bancarios\r\n-Experiencia en ventas de credito\r\n-Sin problema de constante movilidad', '2023-02-24 20:53:11'),
(38, 'curriculum_vitae/Elijah Woodard_(Promotor Cambaceo)_Curriculum01.pdf', 'Promotor Cambaceo', 'usuario20@piviweb.com', 'Elijah Woodard', '25', '04 72 74 42 87', 'Superior', 'Licenciatura en Salud Pública', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Oaxaca', 'San Francisco Chindúa', 'Prácticas Profesionales', ' Littlerock Elementary', 'Sonora', 'Bacerac', 'Promotor Cambaceo', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas.\r\nVenta de Servicios de Internet y Telefonía Fija y por Cable\r\nVenta de Servicios de Internet y Telefonía Fija y por Cable\r\nHorario: Lunes a Sabado 10:00am a 7:00pm\r\n¡¡¡Sueldo y Comisiones SEMANAL!!!\r\nOfrecemos:\r\nPrestaciones de Ley\r\nSeguro de vida\r\nVales de Despensa 5%\r\nIMSS y Aguinaldo Integrado a Ingresos Totales (Sueldo + Comisiones)', 'Licenciatura en Periodismo', 'Nuestro Candidato Ideal:\r\n-Gusto por las ventas y generar comisiones\r\n-Facilidad de palabra y atención a cliente\r\n-Secundaria terminada', '2023-02-24 20:52:09'),
(39, 'curriculum_vitae/Chaney Tate_(Asistente de Reclutamiento y Selección)_Curriculum02.pdf', 'Asistente de Reclutamiento y Selección', 'usuario19@piviweb.com', 'Chaney Tate', '26', '08 11 46 39 58', 'Media Superior', 'Licenciatura en Nutrición', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Nuevo_Leon', 'Villaldama', 'Servicio Social', 'Aramark Theatre', 'Tlaxcala', 'Huamantla', 'Asistente de Reclutamiento y Selección', 'Publicación de vacantes en diferentes bolsas de trabajo\r\nManejo de redes sociales\r\nEntrevistas\r\nFiltrar candidatos', 'Licenciatura en Letras Hispánicas', 'Coordinar pruebas psicométricas\r\nRecolectar y revisar la documentación requerida\r\nRevisar referencias laborales\r\nDesarrollar Descripciones de puesto\r\nRealizar reportes diarios\r\nCubrir vacantes\r\nRedacción de diferentes documentos', '2023-02-24 20:52:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `IDContacto` int(11) NOT NULL,
  `Nombre_Contacto` varchar(100) NOT NULL,
  `Emp_Inst_Contacto` varchar(100) NOT NULL,
  `Area_Contacto` varchar(100) NOT NULL,
  `Telefono_Contacto` varchar(100) NOT NULL,
  `Celular_Contacto` varchar(100) NOT NULL,
  `Correo_Contacto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`IDContacto`, `Nombre_Contacto`, `Emp_Inst_Contacto`, `Area_Contacto`, `Telefono_Contacto`, `Celular_Contacto`, `Correo_Contacto`) VALUES
(7, 'Walker Grimes', ' Littlerock Elementary', 'Dirección', '03 24 65 72 14', '6909167634117', 'tincidunt.adipiscing.mauris@google.com'),
(8, 'Dominic Dunlap', 'Conversation Stage', 'Administración', '04 02 74 30 88', '76164201229', 'scelerisque@icloud.net'),
(9, 'Brendan Kelley', 'East Shores College', 'Recursos humanos', '04 47 37 41 68', '75857926851979', 'magna.et@icloud.org'),
(10, 'Daniel Hayes', 'Diversity Of Variety', 'Producción', '08 81 44 11 61', '4652202284162', 'in@aol.org'),
(11, 'Dexter Fields', 'Granite Hills School for Girls', 'Comercial y Ventas', '04 86 41 64 23', '402946388367', 'tincidunt.nibh.phasellus@hotmail.com'),
(12, 'Preston Berg', 'Emagazines Theater', 'Marketing y publicidad', '04 58 17 39 50', '04860729080717', 'integer.tincidunt@aol.edu'),
(13, 'Octavius Weaver', 'Lakewood Secondary School', 'Contabilidad y finanzas', '08 81 66 77 76', '1307785521', 'eleifend.egestas@yahoo.org'),
(14, 'Hedley Guzman', 'The Arcturus Studio', 'Dirección', '01 16 38 21 37', '1703066366', 'et.ipsum@yahoo.net'),
(15, 'Zephania Snow', 'Summers Academy', 'Administración', '07 02 11 16 77', '62364959628', 'ipsum.sodales@icloud.org'),
(16, 'Oscar Pittman', 'The Stage Space', 'Recursos humanos', '03 78 52 43 67', '8417827224', 'primis.in@aol.net');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuario`
--

CREATE TABLE `datos_usuario` (
  `IDDUsuario` int(11) NOT NULL,
  `Correo_DUsuario` varchar(100) NOT NULL,
  `Nombre_DUsuario` varchar(100) NOT NULL,
  `Edad_DUsuario` varchar(100) NOT NULL,
  `Telefono_DUsuario` varchar(100) NOT NULL,
  `Nivel_DUsuario` varchar(100) NOT NULL,
  `Carrera_DUsuario` varchar(100) NOT NULL,
  `Conocimiento_DUsuario` varchar(200) NOT NULL,
  `Ciudad_DUsuario` varchar(100) NOT NULL,
  `Minicipio_DUsuario` varchar(100) NOT NULL,
  `TVacante_DUsuario` varchar(100) NOT NULL,
  `Fecha_DUsuario` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `datos_usuario`
--

INSERT INTO `datos_usuario` (`IDDUsuario`, `Correo_DUsuario`, `Nombre_DUsuario`, `Edad_DUsuario`, `Telefono_DUsuario`, `Nivel_DUsuario`, `Carrera_DUsuario`, `Conocimiento_DUsuario`, `Ciudad_DUsuario`, `Minicipio_DUsuario`, `TVacante_DUsuario`, `Fecha_DUsuario`) VALUES
(109, 'usuario20@piviweb.com', 'Elijah Woodard', '25', '04 72 74 42 87', 'Superior', 'Licenciatura en Salud Pública', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Oaxaca', 'San Francisco Chindúa', 'Prácticas Profesionales', '2023-02-24 20:33:35'),
(108, 'usuario19@piviweb.com', 'Chaney Tate', '26', '08 11 46 39 58', 'Media Superior', 'Licenciatura en Nutrición', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Nuevo_Leon', 'Villaldama', 'Servicio Social', '2023-02-24 20:31:54'),
(107, 'usuario17@piviweb.com', 'Ray Dudley', '27', '04 52 84 61 31', 'Superior', 'Licenciatura en Ingeniería en Nanotecnología', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Nayarit', 'Bahía De Banderas', 'Bolsa de Trabajo', '2023-02-24 20:30:30'),
(106, 'usuario16@piviweb.com', 'Kennan Marquez', '28', '01 33 40 78 39', 'Media Superior', 'Licenciatura en Ingeniería en Energía', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Morelos', 'Temoac', 'Proyectos', '2023-02-24 20:29:00'),
(105, 'usuario15@piviweb.com', 'Lucas Vance', '29', '09 81 72 03 17', 'Superior', 'Licenciatura en Ingeniería en Ciencias Computacionales', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Michoacan', 'José Sixto Verduzco', 'Becarios', '2023-02-24 20:27:58'),
(104, 'usuario13@piviweb.com', 'Lionel Schroeder', '30', '02 94 60 64 27', 'Superior', 'Licenciatura en Historia del Arte', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Jalisco', 'San Ignacio Cerro Gordo', 'Residencias Profesionales', '2023-02-24 20:26:41'),
(103, 'usuario14@piviweb.com', 'Wyatt Roberson', '31', '05 48 58 73 84', 'Media Superior', 'Licenciatura en Gerontología', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Hidalgo', 'Zimapán', 'Prácticas Profesionales', '2023-02-24 20:25:03'),
(102, 'usuario18@piviweb.com', 'Camden Evans', '20', '06 53 15 76 34', 'Superior', 'Licenciatura en Estudios Liberales', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Guerrero', 'Iliatenco', 'Servicio Social', '2023-02-24 20:22:59'),
(101, 'usuario12@piviweb.com', 'Tyrone Bradford', '21', '06 42 92 84 99', 'Superior', 'Licenciatura en Diseño de Artesanías', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Guanajuato', 'Yuriria', 'Bolsa de Trabajo', '2023-02-24 20:21:21'),
(100, 'usuario11@piviweb.com', 'Arthur Ayers', '22', '06 67 44 71 64', 'Media Superior', 'Licenciatura en Derecho o Abogado', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Estado_de_Mexico', 'Tonanitla', 'Proyectos', '2023-02-24 20:20:19'),
(99, 'usuario10@piviweb.com', 'Raymond Todd', '23', '04 65 27 29 54', 'Superior', 'Licenciatura en Contaduría Pública', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Durango', 'Nuevo Ideal', 'Becarios', '2023-02-24 20:19:03'),
(98, 'usuario09@piviweb.com', 'Kasimir Cote', '24', '07 87 12 77 15', 'Media Superior', 'Licenciatura en Administración de Negocios', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Colima', 'Coneto De Comonfort', 'Residencias Profesionales', '2023-02-24 20:17:50'),
(97, 'usuario08@piviweb.com', 'Stuart Dodson', '25', '08 52 50 44 64', 'Superior', 'Carrera de Médico Cirujano y Partero', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Coahuila', 'Villa Unión', 'Prácticas Profesionales', '2023-02-24 20:16:15'),
(96, 'usuario07@piviweb.com', 'Anthony Larsen', '25', '08 33 86 47 74', 'Media Superior', 'Licenciatura en Trabajo Social', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Ciudad_de_Mexico', 'Venustiano Carranza', 'Servicio Social', '2023-02-24 20:15:11'),
(95, 'usuario06@piviweb.com', 'Noble Petersen', '26', '05 70 27 22 74', 'Superior', 'Licenciatura en Sociología', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Chihuahua', 'Praxedis G. Guerrero', 'Bolsa de Trabajo', '2023-02-24 20:14:05'),
(94, 'usuario05@piviweb.com', 'Ishmael Gould', '27', '08 23 48 54 04', 'Media Superior', 'Licenciatura en Historia', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Chiapas', 'Santiago El Pinar', 'Proyectos', '2023-02-24 20:11:42'),
(93, 'usuario04@piviweb.com', 'Lyle Sandoval', '28', '06 22 22 68 17', 'Media Superior', 'Licenciatura en Geografía', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Campeche', 'Tenabo', 'Becarios', '2023-02-24 20:10:22'),
(92, 'usuario03@piviweb.com', 'Rajah Buck', '29', '07 83 86 82 28', 'Superior', 'Licenciatura en Filosofía', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Baja_California_Sur', 'Comondú', 'Residencias Profesionales', '2023-02-24 20:09:11'),
(90, 'usuario01@piviweb.com', 'Zephania Rollins', '31', '07 46 74 47 47', 'Media Superior', 'Licenciatura en Antropología', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Aguascalientes', 'San José De Gracia', 'Servicio Social', '2023-02-24 20:04:13'),
(91, 'usuario02@piviweb.com', 'Otto Herrera', '30', '07 25 29 64 88', 'Superior', 'Licenciatura en Comunicación Pública', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Baja_California', 'Playas De Rosarito', 'Prácticas Profesionales', '2023-02-24 20:07:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `IDEmpresa` int(11) NOT NULL,
  `Nombre_Empresa` varchar(100) NOT NULL,
  `RFC_Empresa` varchar(100) NOT NULL,
  `Giro_Empresa` varchar(100) NOT NULL,
  `Vacantes_Empresa` varchar(200) NOT NULL,
  `Medios_Empresa` varchar(200) NOT NULL,
  `Estado_Empresa` varchar(100) NOT NULL,
  `Delegacion_Empresa` varchar(100) NOT NULL,
  `Colonia_Empresa` varchar(100) NOT NULL,
  `Calle_Empresa` varchar(100) NOT NULL,
  `Numero_Ext_Empresa` varchar(100) NOT NULL,
  `Numero_Int_Empresa` varchar(100) NOT NULL,
  `CodigoP_Empresa` varchar(100) NOT NULL,
  `Oficinas_Empresa` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`IDEmpresa`, `Nombre_Empresa`, `RFC_Empresa`, `Giro_Empresa`, `Vacantes_Empresa`, `Medios_Empresa`, `Estado_Empresa`, `Delegacion_Empresa`, `Colonia_Empresa`, `Calle_Empresa`, `Numero_Ext_Empresa`, `Numero_Int_Empresa`, `CodigoP_Empresa`, `Oficinas_Empresa`) VALUES
(45, 'Newhart Group', 'MGL40159', 'Metalurgia', 'Street entertainer\r\nAu pair\r\nLap dancer\r\nMedical student\r\nDisc jockey\r\nLaboratory technician\r\nDancer\r\nCareer criminal\r\nHeating engineer\r\nLighthouse keeper\r\nGardener\r\nTarot Reader', 'Nombre: Cullen Bryant\r\nTelefono: 01 77 17 57 64\r\nCorreo Electronico: ornare.fusce@icloud.couk', 'San_Luis_Potosi', 'Tierra Nueva', 'Paucek Pass', 'Jefferey Common', '78', '33', '78331', '78331 Kshlerin Brooks'),
(44, 'Dulce Gallo', 'NBD40106', 'Telecomunicaciones', 'IT consultant\r\nDressmaker\r\nBaggage handler\r\nEstate agent\r\nProfessor\r\nLegal secretary', 'Nombre: Troy Whitley\r\nTelefono: 06 34 45 85 17\r\nCorreo Electronico: gravida.molestie@outlook.ca', 'Quintana_Roo', 'Lázaro Cárdenas', 'Maggio Ports', 'Pouros Club', '22', '48', '22486', '2248 Gorczany Port'),
(43, 'The Cenobite Theatre', 'GKJ40147', 'Turismo', 'Dancer\r\nCareer criminal\r\nHeating engineer\r\nLighthouse keeper\r\nGardener\r\nTarot Reader\r\nDental hygienist\r\nCatering staff\r\nSoldier\r\nAu pair\r\nCabin crew\r\nSurveyor', 'Nombre: Otto Frank\r\nTelefono: 08 66 52 11 99\r\nCorreo Electronico: pellentesque.habitant@yahoo.org', 'Queretaro', 'San Joaquín', 'Schowalter Flats', 'Cory Isle', '34', '89', '34894', '3489 Brandon Station'),
(42, 'The Stage Space', 'MBJ37019', 'Transporte aéreo', 'Laboratory technician\r\nDisc jockey\r\nMedical student\r\nLap dancer\r\nAu pair\r\nStreet entertainer', 'Nombre: Blaze Sloan\r\nTelefono: 02 94 24 29 12\r\nCorreo Electronico: 02 94 24 29 12', 'Puebla', 'Altepexi', 'Leuschke Knolls', 'Jamaal Corners', '25', '73', '25733', 'Caitlyn Terrace'),
(41, 'Emagazines Theater', 'VDF40152', 'Construcción', 'Dental hygienist\r\nCatering staff\r\nSoldier\r\nAu pair\r\nCabin crew\r\nSurveyor\r\nBank clerk\r\nMassage therapist\r\nGenealogist\r\nPhysiotherapist\r\nMarketing director\r\nClerical assistant', 'Nombre: Chandler Boyer\r\nTelefono: 04 67 08 78 10\r\nCorreo Electronico: ad.litora.torquent@protonmail.edu', 'Oaxaca', 'Coatecas Altas', 'Labadie Center', 'Louvenia Street', '8', '80', '08803', '0880 Dietrich Plain'),
(40, 'Aramark Theatre', 'FKN40160', 'Bienes raíces', 'Tarot Reader\r\nGardener\r\nLighthouse keeper\r\nHeating engineer\r\nCareer criminal\r\nDancer', 'Nombre: Yasir Powers\r\nTelefono: 02 51 60 83 89\r\nCorreo Electronico: semper.pretium@google.com', 'Nuevo_Leon', 'Parás', 'Dejuan Mill', 'Fay Club', '57', '75', '75574', '860 Mervin Streets'),
(39, 'Dinosaurs In The Sky', 'JRE40137', 'Pesca', 'Bank clerk\r\nMassage therapist\r\nGenealogist\r\nPhysiotherapist\r\nMarketing director\r\nClerical assistant\r\nSports coach\r\nSecurity guard\r\nGardener\r\nImmigration officer\r\nFitness instructor\r\nTour guide', 'Nombre: Cairo Mcfarland\r\nTelefono: 03 30 50 83 47\r\nCorreo Electronico: diam@yahoo.couk', 'Nayarit', 'Santa María Del Oro', 'Kelley Coves', 'Stamm Points', '55', '86', '55869', '753 McCullough Squares'),
(38, 'Diversity Of Variety', 'IFH37006', 'Minería', 'Surveyor\r\nCabin crew\r\nAu pair\r\nSoldier\r\nCatering staff\r\nDental hygienist', 'Nombre: Curran Howard\r\nTelefono: 08 17 45 60 77\r\nCorreo Electronico: blandit.viverra@outlook.edu', 'Aguascalientes', 'Aguascalientes', 'Eulalia Meadows', 'Zemlak Fall', '89', '4', '89040', '89040 Alfred Highway'),
(37, 'Conversation Stage', '40154', 'Software', 'Sports coach\r\nSecurity guard\r\nGardener\r\nImmigration officer\r\nFitness instructor\r\nTour guide\r\nBook-keeper\r\nEstate agent\r\nCashier\r\nOccupational therapist\r\nCar wash attendant\r\nClockmaker', 'Nombre: chase Maxwell\r\nTelefono: 03 77 36 23 22\r\nCorreo Electronico: cras.eget@icloud.org', 'Morelos', 'Mazatepec', 'Kshlerin Road', 'Mustafa Islands', '32', '15', '6279', '6279 Larkin Summit'),
(36, 'The Arcturus Studio', 'FDS40002', 'Ganadería', 'Clerical assistant\r\nMarketing director\r\nPhysiotherapist\r\nGenealogist\r\nMassage therapist\r\nBank clerk', 'Nombre: Murphy Yang\r\nTelefono: 03 02 87 80 76\r\nCorreo Electronico: lacus.cras@protonmail.com', 'Colima', 'Doctor Mora', 'Lottie Crossing', 'Hyman Squares', '9', '7', '745654', '47415 Pagac Skyway');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `IDInstitucion` int(11) NOT NULL,
  `Nombre_Institucion` varchar(100) NOT NULL,
  `Clave_Institucion` varchar(100) NOT NULL,
  `Nivel_Institucion` varchar(100) NOT NULL,
  `Dependencia_Institucion` varchar(100) NOT NULL,
  `Turno_Institucion` varchar(100) NOT NULL,
  `Carreras_Institucion` varchar(200) NOT NULL,
  `Vacantes_Institucion` varchar(200) NOT NULL,
  `Medios_Institucion` varchar(200) NOT NULL,
  `Estado_Institucion` varchar(100) NOT NULL,
  `Delegacion_Institucion` varchar(100) NOT NULL,
  `Colonia_Institucion` varchar(100) NOT NULL,
  `Calle_Institucion` varchar(100) NOT NULL,
  `Numero_Ext_Institucion` varchar(100) NOT NULL,
  `Numero_Int_Institucion` varchar(100) NOT NULL,
  `CodigoP_Institucion` varchar(100) NOT NULL,
  `Nombre_Plantel` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`IDInstitucion`, `Nombre_Institucion`, `Clave_Institucion`, `Nivel_Institucion`, `Dependencia_Institucion`, `Turno_Institucion`, `Carreras_Institucion`, `Vacantes_Institucion`, `Medios_Institucion`, `Estado_Institucion`, `Delegacion_Institucion`, `Colonia_Institucion`, `Calle_Institucion`, `Numero_Ext_Institucion`, `Numero_Int_Institucion`, `CodigoP_Institucion`, `Nombre_Plantel`) VALUES
(71, 'Summers Academy', '40030', 'Secundaria', 'Privada', 'Vespertino', 'Filosofía y ética\r\nHistoria y arqueología\r\nLenguas extranjeras\r\nLiteratura', 'Sports coach\r\nSecurity guard\r\nGardener\r\nImmigration officer\r\nFitness instructor\r\nTour guide\r\nBook-keeper\r\nEstate agent\r\nCashier\r\nOccupational therapist\r\nCar wash attendant\r\nClockmaker', 'Nombre: Rooney Barnett\r\nTelefono: 01 48 52 57 81\r\nCorreo Electronico: diam@icloud.com', 'Guanajuato', 'Manuel Doblado', 'Yasmine Junctions', 'Ervin Fork', '3', '34', '38304', 'Summers Academy'),
(70, 'Granite Hills School for Girls', '37166', 'Primaria', 'Publica', 'Matutino', 'Diseño\r\nMúsica y artes escénicas\r\nTécnicas audiovisuales y producción de medios', 'Clerical assistant\r\nMarketing director\r\nPhysiotherapist\r\nGenealogist\r\nMassage therapist\r\nBank clerk', 'Nombre: Dean Richard\r\nTelefono: 04 85 62 18 58\r\nCorreo Electronico: nisl.quisque.fringilla@yahoo.org', 'Estado_de_Mexico', 'Axapusco', 'Kuhic Way', 'Dibbert Shore', '75', '79', '7579', 'Granite Hills School for Girls'),
(69, ' Grapevine University', '40127', 'Superior', 'Publica', 'Ambos Turnos', 'Ciencias de la tierra y la atmósfera\r\nFísica\r\nQuímica', 'Book-keeper\r\nEstate agent\r\nCashier\r\nOccupational therapist\r\nCar wash attendant\r\nClockmaker\r\nMarketing director\r\nBusiness owner\r\nLandowner\r\nPark ranger\r\nBaker\r\nAircraft engineer', 'Nombre: Lamar Bernard\r\nTelefono: 09 62 29 34 65\r\nCorreo Electronico: aliquet.proin@icloud.couk', 'Colima', 'Canelas', 'Ernser Manor', 'Legros Garden', '78', '5', '71648', ' Grapevine University'),
(68, 'Sacred Heart Institute', '40128', 'Media Superior', 'Privada', 'Vespertino', 'Biología y bioquímica\r\nCiencias ambientales', 'Book-keeper\r\nEstate agent\r\nCashier\r\nOccupational therapist\r\nCar wash attendant\r\nClockmaker\r\nMarketing director\r\nBusiness owner\r\nLandowner\r\nPark ranger\r\nBaker\r\nAircraft engineer', 'Nombre: Price Spears\r\nTelefono: 4 74 82 47 38\r\nCorreo Electronico: risus@icloud.net', 'Coahuila', 'Escobedo', 'Crooks Lake', 'Missouri Village', '16', '8', '12346', 'Sacred Heart Institute'),
(67, 'East Shores College', '90659', 'Secundaria', 'Privada', 'Matutino', 'Ciencias de la educación, programas multidisciplinarios o generales\r\nDidáctica, pedagogía y currículo\r\nOrientación y asesoría educativa', 'Book-keeper\r\nEstate agent\r\nCashier\r\nOccupational therapist\r\nCar wash attendant\r\nClockmaker\r\nMarketing director\r\nBusiness owner\r\nLandowner\r\nPark ranger\r\nBaker\r\nAircraft engineer', 'Nombre: Adrian Alford\r\nTelefono: 04 11 31 74 71\r\nCorreo Electronico: donec.tempus@yahoo.net', 'Ciudad_de_Mexico', 'Tláhuac', 'Elda Mission', 'Schaefer Prairie', '68', '59', '2817', 'East Shores College'),
(66, ' Littlerock Elementary', '90706', 'Primaria', 'Publica', 'Ambos Turnos', 'Bellas artes\r\nFormación docente para educación básica, nivel preescolar\r\nFormación docente para educación básica, nivel primaria\r\nFormación docente para educación básica, nivel secundaria\r\nFormación d', 'Tour guide\r\nFitness instructor\r\nImmigration officer\r\nGardener\r\nSecurity guard\r\nSports coach', 'Nombre: Kareem Gamble\r\nTelefono: 03 48 31 40 84\r\nCorreo Electronico: eu@aol.net', 'Chihuahua', 'Casas Grandes', 'Thompson Walk', 'Bashirian Circle', '795', '52', '8657', ' Littlerock Elementary'),
(65, 'Diamond University', '90661', 'Superior', 'Privada', 'Matutino', 'Industria de la alimentación\r\nManufacturas y procesos, programas multidisciplinarios o generales\r\nMinería y extracción', 'Marketing director\r\nBusiness owner\r\nLandowner\r\nPark ranger\r\nBaker\r\nAircraft engineer', 'Nombre: Cooper Gallegos\r\nTelefono: 04 95 72 33 48\r\nCorreo Electronico: lorem@google.com', 'Campeche', 'Palizada', 'Deckow Expressway', 'Kunde Ports', '30', '98', '3104', 'Diamond University'),
(64, 'Harbor View College', '40062', 'Media Superior', 'Publica', 'Ambos Turnos', 'Electricidad y generación de energía\r\nElectrónica y automatización\r\nIngeniería de vehículos de motor, barcos y aeronaves\r\nIngeniería industrial, mecánica, electrónica y tecnología, programas multidisc', 'Clockmaker\r\nCar wash attendant\r\nOccupational therapist\r\nCashier\r\nEstate agent\r\nBook-keeper', 'Nombre: Griffith Curry\r\nTelefono: 06 46 88 70 15\r\nCorreo Electronico: cum.sociis.natoque@icloud.com', 'Baja_California_Sur', 'Los Cabos', 'Barrows Forks', 'Sonya Forge', '11', '27', '99796', 'Harbor View College'),
(63, 'Lakewood Secondary School', '40133', 'Secundaria', 'Privada', 'Vespertino', 'Ciencias políticas\r\nEconomía\r\nPsicología\r\nSociología y antropología\r\nTrabajo y atención social', 'Aircraft engineer\r\nPark ranger\r\nBusiness owner\r\nBaker\r\nLandowner', 'Nombre: Nash Patton\r\nTelefono: \"07 51 30 17 86\r\nCorreo Electronico: mi.lorem@aol.com', 'Baja_California', 'Tecate', 'Smitham Forks', 'Marquardt Groves', '10', '17', '14793', 'Lakewood Secondary School'),
(62, 'East Shores School for Girls', '40138', 'Primaria', 'Publica', 'Matutino', 'Administración y gestión de empresas\r\nContabilidad y fiscalización\r\nFinanzas, banca y seguros\r\nMercadotecnia y publicidad\r\nNegocios y administración, programas multidisciplinarios o generales\r\nNegocio', 'Counsellor\r\nPickpocket\r\nUndertaker\r\nChiropodist\r\nCivil servant', 'Brennan Cooper 05 53 13 24 08 ac.sem.ut@outlook.ca', 'Aguascalientes', 'Rincón De Romos', 'Price Avenue', 'Madalyn Manor', '42', '31', '37399', 'East Shores School for Girls');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulados_aceptados`
--

CREATE TABLE `postulados_aceptados` (
  `IDUPAceptados` int(11) NOT NULL,
  `Direccion_UPAceptados` varchar(200) NOT NULL,
  `Correo_UPAceptados` varchar(100) NOT NULL,
  `Titulo_UPAceptados` varchar(200) NOT NULL,
  `Fecha_UPAceptados` varchar(100) NOT NULL,
  `Reporte_UPAceptados` varchar(500) NOT NULL,
  `Nombre_DUsuario` varchar(100) NOT NULL,
  `Edad_DUsuario` varchar(100) NOT NULL,
  `Telefono_DUsuario` varchar(100) NOT NULL,
  `Nivel_DUsuario` varchar(100) NOT NULL,
  `Carrera_DUsuario` varchar(100) NOT NULL,
  `Conocimiento_DUsuario` varchar(200) NOT NULL,
  `Ciudad_DUsuario` varchar(100) NOT NULL,
  `Minicipio_DUsuario` varchar(100) NOT NULL,
  `TVacante_DUsuario` varchar(100) NOT NULL,
  `Emp_Inst_Vacantes` varchar(100) NOT NULL,
  `Estado_Vacantes` varchar(100) NOT NULL,
  `Delegacion_Vacantes` varchar(100) NOT NULL,
  `Cargo_Vacantes` varchar(100) NOT NULL,
  `Descripcion_Vacantes` varchar(500) NOT NULL,
  `Carrera_Vacantes` varchar(100) NOT NULL,
  `Conocimientos_Vacantes` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `postulados_aceptados`
--

INSERT INTO `postulados_aceptados` (`IDUPAceptados`, `Direccion_UPAceptados`, `Correo_UPAceptados`, `Titulo_UPAceptados`, `Fecha_UPAceptados`, `Reporte_UPAceptados`, `Nombre_DUsuario`, `Edad_DUsuario`, `Telefono_DUsuario`, `Nivel_DUsuario`, `Carrera_DUsuario`, `Conocimiento_DUsuario`, `Ciudad_DUsuario`, `Minicipio_DUsuario`, `TVacante_DUsuario`, `Emp_Inst_Vacantes`, `Estado_Vacantes`, `Delegacion_Vacantes`, `Cargo_Vacantes`, `Descripcion_Vacantes`, `Carrera_Vacantes`, `Conocimientos_Vacantes`) VALUES
(4, 'curriculum_vitae/Noble Petersen_(SDR experto)_Curriculum03.pdf', 'usuario06@piviweb.com', 'SDR experto', '2023-02-24 14:59:29', '', 'Noble Petersen', '26', '05 70 27 22 74', 'Superior', 'Licenciatura en Sociología', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Chihuahua', 'Praxedis G. Guerrero', 'Bolsa de Trabajo', 'Dulce Gallo', 'Guanajuato', 'Atarjea', 'SDR experto', 'Si no conoces el puesto, agradeceremos no te postules.\r\nResponsable de generar nuevas oportunidades de negocio y leads para el equipo de ventas de una empresa de servicios enfocada en la documentación y estandarización de procesos de negocio. Su rol se enfoca en las primeras etapas del proceso de ventas, incluyendo la generación de leads, la calificación y el desarrollo de relaciones.\r\nLos leads sería en empresas pequeñas y medianas, de cualquier sector, ubicadas en México y Latam.\r\nSe requiere ', 'Licenciatura en Mercadotecnia', 'Las responsabilidades principales del SDR incluyen:\r\nGeneración de leads: Investigar y identificar a posibles clientes, y contactarlos a través de canales como el correo electrónico, el teléfono o las redes sociales.\r\nCalificación de leads: Evaluar el potencial de los leads para determinar su ajuste y interés en los productos o servicios de la empresa.\r\nDesarrollo de relaciones: Construir relaciones con los leads a través de una comunicación regular, y proporcionarles información relevante para '),
(5, 'curriculum_vitae/Anthony Larsen_(AUXILIAR CONTABLE)_Curriculum02.pdf', 'usuario07@piviweb.com', 'AUXILIAR CONTABLE', '2023-02-24 14:59:04', '', 'Anthony Larsen', '25', '08 33 86 47 74', 'Media Superior', 'Licenciatura en Trabajo Social', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Ciudad_de_Mexico', 'Venustiano Carranza', 'Servicio Social', 'Harbor View College', 'Oaxaca', 'Asunción Cuyotepeji', 'AUXILIAR CONTABLE', 'DISTRIBUIDORA DE ENVASES PARA EL SECTOR DE VINOS Y LICORES, ALIMENTOS, CERVEZA Y MEDICINAL ESTA EN BUSQUEDA DE NUEVO TALENTO COMO “AUXILIAR CONTABLE”', 'Licenciatura en Contabilidad', 'REQUISITOS:\r\n· Edad: 25 a 40 años\r\n· Sexo: Indistinto\r\n· Licenciatura en Contabilidad o a fin\r\nEXPERIENCIA Y HABILIDADES:\r\n· Manejo de ERP de preferencia SAP business one, o equivalente.\r\n· Asientos contables.\r\n· Elaboración de reportes financieros.\r\n· Conocimiento de impuestos y leyes tributarias.\r\n· Depuración de cuentas.\r\n· Elaboración de la DIOT.'),
(6, 'curriculum_vitae/Stuart Dodson_(Secretaria y Asistente ejecutiva)_Curriculum01.pdf', 'usuario08@piviweb.com', 'Secretaria y Asistente ejecutiva', '2023-02-24 14:58:35', '', 'Stuart Dodson', '25', '08 52 50 44 64', 'Superior', 'Carrera de Médico Cirujano y Partero', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Coahuila', 'Villa Unión', 'Prácticas Profesionales', 'Newhart Group', 'Sinaloa', 'Mocorito', 'Secretaria y Asistente ejecutiva', 'Facturación y control de cuentas por cobrar\r\nAtención telefónica a clientes, proveedores y terceros.', 'Licenciatura en Actuaría', '2. Actualización de la agenda corporativa y personal de los ejecutivos y directores.\r\n3. Realización de escritos, cheques y llamadas para ejecutivos o directores.\r\n4. Tomar recados o mensajes en caso de que la persona no se encuentre y reportarlos de inmediato.\r\n5. Entrega y recepción de documentos.\r\n6. Control de los insumos de papelería, cartuchos de impresoras, cafetería y herramientas de trabajo para evitar desabasto.\r\n7. Sacar copias y escaneos según se requiera.\r\n8. Mantener limpia el área'),
(7, 'curriculum_vitae/Kasimir Cote_(MEDICO DICTAMINADOR)_Curriculum04.pdf', 'usuario09@piviweb.com', 'MEDICO DICTAMINADOR', '2023-02-24 14:58:15', '', 'Kasimir Cote', '24', '07 87 12 77 15', 'Media Superior', 'Licenciatura en Administración de Negocios', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Colima', 'Coneto De Comonfort', 'Residencias Profesionales', 'Sacred Heart Institute', 'Veracruz', 'Ixmatlahuacan', 'MEDICO DICTAMINADOR', 'Revisión de cuentas hospitalarias desde el\r\ningreso de la hospitalización hasta el alta de los asegurados atendidos en\r\nhospitales nacionales,\r\n· Revisión ágil de cuentas al egreso para desviar\r\ninsumos por sobreutilización y exclusiones por contrato de gastos médicos,', 'Licenciatura en Enfermería', 'Gestión interdisciplinaria (hospital y equipo médico)\r\nde casos hospitalarios,\r\n· Aclaración de insumos de alto costo con\r\nproveedores hospitalarios, médicos y equipo especializado,\r\n· Seguimiento a ahorros por desviaciones\r\nrealizadas durante la hospitalización o egresos,\r\n· Gestión de casos hospitalarios en hospitales\r\nnacionales asignados\r\n· Dictamen médico acorde a contrato de asegurados,\r\nrevisión de notas, informes médicos, notas de evolución, estudios asociados al\r\ndiagnóstico y coherenci'),
(8, 'curriculum_vitae/Raymond Todd_(Soldador Microalambre)_Curriculum03.pdf', 'usuario10@piviweb.com', 'Soldador Microalambre', '2023-02-24 14:57:40', '', 'Raymond Todd', '23', '04 65 27 29 54', 'Superior', 'Licenciatura en Contaduría Pública', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Durango', 'Nuevo Ideal', 'Becarios', 'The Cenobite Theatre', 'San_Luis_Potosi', 'Villa Juárez', 'Soldador Microalambre', 'Armado y Soldado de piezas, para la fabricación de los bastidores, con soldadura de micro alambre, cumpliendo los lineamientos\r\nArmado de Bastidores usando el equipo de medición (niveles, block escala, vernier y cinta métrica) y usando el plano de fabricación e interpretando la simbología de soldadura según aplica el producto.\r\nLlevar a cabo el movimiento de las piezas de gran dimensión y tamaño a través de los equipos de levante (grúa viajera o polipasto)\r\nAsegurar que se cumplan los lineamient', 'Licenciatura en Arquitectura', 'Nuestro Candidato Ideal:\r\n-Experiencia en soldadura de micro alambre\r\n-interpretación de dibujos\r\n-armado de piezas\r\n-polipastos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulados_rechazados`
--

CREATE TABLE `postulados_rechazados` (
  `IDUPAceptados` int(11) NOT NULL,
  `Direccion_UPRechazados` varchar(200) NOT NULL,
  `Correo_UPRechazados` varchar(100) NOT NULL,
  `Titulo_UPRechazados` varchar(200) NOT NULL,
  `Fecha_UPRechazados` varchar(100) NOT NULL,
  `Reporte_UPRechazados` varchar(500) NOT NULL,
  `Nombre_DUsuario` varchar(100) NOT NULL,
  `Edad_DUsuario` varchar(100) NOT NULL,
  `Telefono_DUsuario` varchar(100) NOT NULL,
  `Nivel_DUsuario` varchar(100) NOT NULL,
  `Carrera_DUsuario` varchar(100) NOT NULL,
  `Conocimiento_DUsuario` varchar(200) NOT NULL,
  `Ciudad_DUsuario` varchar(100) NOT NULL,
  `Minicipio_DUsuario` varchar(100) NOT NULL,
  `TVacante_DUsuario` varchar(100) NOT NULL,
  `Emp_Inst_Vacantes` varchar(100) NOT NULL,
  `Estado_Vacantes` varchar(100) NOT NULL,
  `Delegacion_Vacantes` varchar(100) NOT NULL,
  `Cargo_Vacantes` varchar(100) NOT NULL,
  `Descripcion_Vacantes` varchar(500) NOT NULL,
  `Carrera_Vacantes` varchar(100) NOT NULL,
  `Conocimientos_Vacantes` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `postulados_rechazados`
--

INSERT INTO `postulados_rechazados` (`IDUPAceptados`, `Direccion_UPRechazados`, `Correo_UPRechazados`, `Titulo_UPRechazados`, `Fecha_UPRechazados`, `Reporte_UPRechazados`, `Nombre_DUsuario`, `Edad_DUsuario`, `Telefono_DUsuario`, `Nivel_DUsuario`, `Carrera_DUsuario`, `Conocimiento_DUsuario`, `Ciudad_DUsuario`, `Minicipio_DUsuario`, `TVacante_DUsuario`, `Emp_Inst_Vacantes`, `Estado_Vacantes`, `Delegacion_Vacantes`, `Cargo_Vacantes`, `Descripcion_Vacantes`, `Carrera_Vacantes`, `Conocimientos_Vacantes`) VALUES
(19, 'curriculum_vitae/Rajah Buck_(Gerente nacional de ventas)_Curriculum02.pdf', 'usuario03@piviweb.com', 'Gerente nacional de ventas', '2023-02-24 15:00:54', '', 'Rajah Buck', '29', '07 83 86 82 28', 'Superior', 'Licenciatura en Filosofía', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Baja_California_Sur', 'Comondú', 'Residencias Profesionales', 'Diamond University', 'Chiapas', 'Angel Albino Corzo', 'Gerente nacional de ventas', '¿Buscas una nueva oportunidad en el área comercial?\r\nGNP es una empresa con 122 años de experiencia, brindando estabilidad, certeza y un plan de carrera sólido y permanente.\r\nLa contingencia ha afectado a más de 18 millones de empleados, en GNP seguimos trabajando y generando ingresos desde nuestros hogares.\r\nConoce esta propuesta de negocio y deja que te llevemos al siguiente nivel.\r\nEste proyecto es para personas que tengan:\r\nLicenciatura en administración, finanzas o negocios\r\nSexo indistinto', 'Licenciatura Ejecutiva en Comercio', 'Capacitación personalizada virtual y campo\r\nEstabilidad y crecimiento\r\nBonos trimestrales y anuales\r\nViajes nacionales e internacionales\r\nIncentivos en especie o económicos\r\nMaster respaldado por ITAM\r\nIngresos sin límite'),
(17, 'curriculum_vitae/Zephania Rollins_(Supervisor jr de alimentos y bebidas)_Curriculum04.pdf', 'usuario01@piviweb.com', 'Supervisor jr de alimentos y bebidas', '2023-02-24 15:01:28', '', 'Zephania Rollins', '31', '07 46 74 47 47', 'Media Superior', 'Licenciatura en Antropología', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Aguascalientes', 'San José De Gracia', 'Servicio Social', ' Grapevine University', 'Baja_California', 'Tijuana', 'Supervisor jr de alimentos y bebidas', 'Requisitos:\r\nEscolaridad: Lic. en Gastronomía ( INDISPENSABLE )\r\nExperiencia: 2 a 3 años en restaurantes casual o fine dining como asesor/ consultor\r\nExcelente actitud de servicio.\r\nDisponibilidad de horario.\r\n', 'Licenciatura en Nutrición', 'Funciones:\r\nEjecutar y validar estándares de calidad y operación\r\nReporte de ventas, costos, administración general\r\nSupervisión de operación en tiempo real asegurando procedimientos en todas las áreas operativas (salón y cocina)\r\nEjecución de auditorias operativas para seguimiento de procesos\r\nEstablecer relaciones sanas y proactivas con los colaboradores.'),
(18, 'curriculum_vitae/Otto Herrera_(LA TEQUILA te invita a formar parte de su equipo de trabajo como Sous', 'usuario02@piviweb.com', 'LA TEQUILA te invita a formar parte de su equipo de trabajo como Sous Chef', '2023-02-24 15:01:10', '', 'Otto Herrera', '30', '07 25 29 64 88', 'Superior', 'Licenciatura en Comunicación Pública', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Baja_California', 'Playas De Rosarito', 'Prácticas Profesionales', 'Aramark Theatre', 'Baja_California_Sur', 'Loreto', 'Becario en Gastronomia', 'Funciones:\r\nElaborar y capturar inventarios\r\nSeguimiento a bitácoras de temperaturas\r\nOrganizar y dar seguimiento al rol de limpieza\r\nControl y seguimiento de mermas\r\nAsignación y seguimiento de actividades del personal\r\nGestión de eventos especiales\r\nControl de incidencias del personal', 'Licenciatura en gastronomía', 'Requisitos:\r\nLicenciatura en gastronomía\r\nExperiencia sólida en parrilla, barra,caliente, barra fría\r\nConocimiento en panadería\r\nManejo efectivo de personal\r\nConocimiento de inventarios\r\nGestión de mermas\r\nDisponibilidad de tiempo'),
(20, 'curriculum_vitae/Lyle Sandoval_(SECRTETARIA RECEPCIONISTA)_Curriculum01.pdf', 'usuario04@piviweb.com', 'SECRTETARIA RECEPCIONISTA', '2023-02-24 15:00:20', '', 'Lyle Sandoval', '28', '06 22 22 68 17', 'Media Superior', 'Licenciatura en Geografía', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Campeche', 'Tenabo', 'Becarios', 'Dinosaurs In The Sky', 'Coahuila', 'Francisco I. Madero', 'SECRTETARIA RECEPCIONISTA', 'DESPACHO LEGAL DELEGACION MIGUEL HIDALGO LUNES A VIERNES 9 A 19 HRS SUELDO ATRACTIVO RECEPCION ADMINISTRACION CONMUTADOR REDES IP FACTURACION ATENCION A CLIENTES AGENDA DIRECTORIO MAGNIFICA PRESENTACION', 'Licenciatura en Administración', 'Microsoft Word - Avanzado'),
(21, 'curriculum_vitae/Ishmael Gould_(COSMETOLOGA)_Curriculum04.pdf', 'usuario05@piviweb.com', 'COSMETOLOGA', '2023-02-24 14:59:57', '', 'Ishmael Gould', '27', '08 23 48 54 04', 'Media Superior', 'Licenciatura en Historia', 'Idiomas\r\nCapacidad de adaptación\r\nHabilidades comunicativas\r\nCompetencias digitales\r\nEsfuerzo y lealtad\r\nHabilidades organizativas\r\nTrabajo en equipo\r\nProactividad\r\nProfesional polivalente\r\nCreativida', 'Chiapas', 'Santiago El Pinar', 'Proyectos', 'East Shores School for Girls', 'Durango', 'El Oro', 'COSMETOLOGA', 'VALORAMOS :\r\nüGanas de crecer y aprender\r\nüExcelencia en servicio al cliente y atención al detalle\r\nüCarisma y empatía\r\nü Manejo de la palabra.', 'Licenciatura en Psicología', 'EXPERIENCIA: 1 año en Spa\r\n1 año en aparatología: microdermoabrasión, radiofrecuencia e IPL\r\n1 año en Tratamientos faciales\r\nCONOCIMIENTOS: CERTIFICADA ANTE LA SEP\r\nSUELDO MENSUAL: 10,000 + comision\r\nDIAS A LABORAR: Lunes a Domingo\r\nHORARIO A LABORAR: 10:30 am - 8:00 pm\r\nHORARIO COMIDA: 1 hora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IDUsuario` int(11) NOT NULL,
  `Correo_Usuario` varchar(100) NOT NULL,
  `Contrasena_Usuario` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUsuario`, `Correo_Usuario`, `Contrasena_Usuario`, `tipo`) VALUES
(114, 'usuario01@piviweb.com', '12345', 'Usuario'),
(115, 'usuario02@piviweb.com', '12345', 'Usuario'),
(116, 'usuario03@piviweb.com', '12345', 'Usuario'),
(117, 'usuario04@piviweb.com', '12345', 'Usuario'),
(118, 'usuario05@piviweb.com', '12345', 'Usuario'),
(119, 'usuario06@piviweb.com', '12345', 'Usuario'),
(120, 'usuario07@piviweb.com', '12345', 'Usuario'),
(121, 'usuario08@piviweb.com', '12345', 'Usuario'),
(122, 'usuario09@piviweb.com', '12345', 'Usuario'),
(123, 'usuario10@piviweb.com', '12345', 'Usuario'),
(124, 'usuario11@piviweb.com', '12345', 'Usuario'),
(125, 'usuario12@piviweb.com', '12345', 'Usuario'),
(126, 'usuario18@piviweb.com', '12345', 'Usuario'),
(127, 'usuario14@piviweb.com', '12345', 'Usuario'),
(128, 'usuario13@piviweb.com', '12345', 'Usuario'),
(129, 'usuario15@piviweb.com', '12345', 'Usuario'),
(130, 'usuario16@piviweb.com', '12345', 'Usuario'),
(131, 'usuario17@piviweb.com', '12345', 'Usuario'),
(133, 'usuario20@piviweb.com', '12345', 'Usuario'),
(132, 'usuario19@piviweb.com', '12345', 'Usuario'),
(111, 'administrador03@piviweb.com', '12345', 'Admin'),
(110, 'administrador02@piviweb.com', '12345', 'Admin'),
(109, 'administrador01@piviweb.com', '12345', 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `IDVacantes` int(11) NOT NULL,
  `Titulos_Vacantes` varchar(100) NOT NULL,
  `Emp_Inst_Vacantes` varchar(100) NOT NULL,
  `Estado_Vacantes` varchar(100) NOT NULL,
  `Delegacion_Vacantes` varchar(100) NOT NULL,
  `Cargo_Vacantes` varchar(100) NOT NULL,
  `Descripcion_Vacantes` varchar(500) NOT NULL,
  `Carrera_Vacantes` varchar(100) NOT NULL,
  `Conocimientos_Vacantes` varchar(500) NOT NULL,
  `Seccion_Vacantes` varchar(100) NOT NULL,
  `Color_Vacantes` varchar(100) NOT NULL,
  `Tiempo_Vacantes` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`IDVacantes`, `Titulos_Vacantes`, `Emp_Inst_Vacantes`, `Estado_Vacantes`, `Delegacion_Vacantes`, `Cargo_Vacantes`, `Descripcion_Vacantes`, `Carrera_Vacantes`, `Conocimientos_Vacantes`, `Seccion_Vacantes`, `Color_Vacantes`, `Tiempo_Vacantes`) VALUES
(81, 'ASISTENTE ADMINISTRATIVO', 'The Stage Space', 'Zacatecas', 'Calera', 'ASISTENTE ADMINISTRATIVO', 'Estamos buscando personal para atención al cliente, seguimiento a llamadas y correos electronicos, asi como para realizar cotizaciones de seguros de diferentes ramos. Otra de las tareas a realizar son tramites administrativos de oficina.', 'Licenciatura en Comunicación Pública', 'Indispensable manejo de Paquete Office, computadora, y articulos de oficina. Deseable conocimiento en seguros.\r\nBuena presentación, trato amable, puntual, responsable y facilidad de palabra. El horario laboral es de lunes a viernes de 9: 0 0 a 1 8: 0 0 hrs.\r\nPreferente solteras y sin hijos. Se ofrecen todas las prestaciones de Ley.', 'Proyectos', 'pivianuncio05', '2023-02-24 07:30:45'),
(88, 'Asistente de Reclutamiento y Selección', 'Aramark Theatre', 'Tlaxcala', 'Huamantla', 'Asistente de Reclutamiento y Selección', 'Publicación de vacantes en diferentes bolsas de trabajo\r\nManejo de redes sociales\r\nEntrevistas\r\nFiltrar candidatos', 'Licenciatura en Letras Hispánicas', 'Coordinar pruebas psicométricas\r\nRecolectar y revisar la documentación requerida\r\nRevisar referencias laborales\r\nDesarrollar Descripciones de puesto\r\nRealizar reportes diarios\r\nCubrir vacantes\r\nRedacción de diferentes documentos', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 20:38:49'),
(79, 'Analista Mesa de control y atención al cliente', 'Lakewood Secondary School', 'Michoacan', 'Ario', 'Analista Mesa de control y atención al cliente', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas.\r\nContro y validaciónd de documentación de los clientes\r\nResponsable de recepción/ gestión de documentos para validar requisitos de la institución, Aclaraciones, Seguimiento para autorización de créditos, Atención y servicio al cliente, Contacto directo con proveedores', 'Licenciatura en Contaduría Pública', 'Nuestro Candidato Ideal:\r\n-En Área administrativa validando documentos\r\n-Minimo Pasantes o estudiante de último año de Ing. o Lic. afín', 'Bolsa de Trabajo', 'pivianuncio06', '2023-02-24 07:25:50'),
(78, 'Analista de Documentación', 'Emagazines Theater', 'Aguascalientes', 'Calvillo', 'Analista de Documentación', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas.\r\nValidacion, Cotejo y Digitalización de información\r\nValidación de documentación\r\nAnálisis de información\r\nContratación de persona moral\r\nLlenado de bitácoras\r\nAdministración y validación de contratos', 'Licenciatura en Gestión y Economía Ambiental', 'Nuestro Candidato Ideal:\r\n-6 meses en analisando y administración de la información\r\n-Lic. concluida o a 1 año de graduarse en carreras económico-administrativas\r\n-Conocimientos administrativos Excel: intermedio/ Avanzado\r\n-Comunicación efectiva Captura de datos Administración de documentos', 'Proyectos', 'pivianuncio05', '2023-02-24 07:23:54'),
(89, 'Promotor Cambaceo', ' Littlerock Elementary', 'Sonora', 'Bacerac', 'Promotor Cambaceo', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas.\r\nVenta de Servicios de Internet y Telefonía Fija y por Cable\r\nVenta de Servicios de Internet y Telefonía Fija y por Cable\r\nHorario: Lunes a Sabado 10:00am a 7:00pm\r\n¡¡¡Sueldo y Comisiones SEMANAL!!!\r\nOfrecemos:\r\nPrestaciones de Ley\r\nSeguro de vida\r\nVales de Despensa 5%\r\nIMSS y Aguinaldo Integrado a Ingresos Totales (Sueldo + Comisiones)', 'Licenciatura en Periodismo', 'Nuestro Candidato Ideal:\r\n-Gusto por las ventas y generar comisiones\r\n-Facilidad de palabra y atención a cliente\r\n-Secundaria terminada', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 20:40:12'),
(76, 'Analista de transportacion bilingue', 'Granite Hills School for Girls', 'Campeche', 'Hopelchén', 'Analista de transportacion bilingue', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas.\r\nApoyo en el area de logistica brindando seguimiento, rastreo, y resolucion de problemas con el cliente', 'Licenciatura en Recursos Humanos', 'Importante empresa transportista LTL líder en transporte de carga fraccionada operando en 30 paises y con mas de 30 años de experiencia, solicita:\r\nAnalista de logística\r\nPrincipales funciones:\r\n- Programación de recolecciones y entregas transporte\r\n- Seguimiento y rastreo de las cajas del cliente\r\n- Contacto con cliente y proveedores\r\n- Resolución de problemas\r\n- Planeacion y programacion de transporte', 'Bolsa de Trabajo', 'pivianuncio06', '2023-02-24 07:19:41'),
(87, 'Asesor Hipotecario', ' Grapevine University', 'Sonora', 'Banámichi', 'Asesor Hipotecario', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas. En esta ocasion importante empresa bancaria financiera esta buscando talento como broker hipotecario.\r\nBrindar asesoría en materia hipotecaría Colocación de créditos hipotecarios\r\n- Búsqueda y prospección de clientes (Creación de cartera)\r\n- Recolección e integración de la documentación a los expedientes de los clientes.\r\n- Acompañamiento del cliente durante el proceso.\r\n- Crear relaciones ', 'Licenciatura en Ingeniería en Telemática', 'Nuestro Candidato Ideal:\r\n-Experiencia colocando productos bancarios\r\n-Experiencia en ventas de credito\r\n-Sin problema de constante movilidad', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 20:37:48'),
(75, 'Representante de atención al cliente', 'Diversity Of Variety', 'Michoacan', 'Arteaga', 'Representante de atención al cliente', '¡Llegamos a México!\r\nSomos una empresa líder en movilidad a nivel LATAM, estamos en búsqueda de Ejecutivos de atención al cliente/ventas para el Aeropuerto.', 'Licenciatura en Sistemas de Información', 'Requerimientos Clave:\r\n· Experiencia mínima de 1 año en atención al cliente y ventas;\r\n· Escuela Secundaria completa;\r\n· Paquetería Office Nivel Básico;\r\n· Licencia de Conducir Tipo B;\r\n· Inglés intermedio/avanzado.\r\n· Proactividad y Comunicación;\r\n· Relación Interpersonal;\r\n· Técnicas de Negociación.\r\n· Disponibilidad de horário para rotar turnos.', 'Proyectos', 'pivianuncio05', '2023-02-24 07:17:46'),
(73, 'Licenciatura en Administración Financiera y Sistemas', 'Conversation Stage', 'Ciudad_de_Mexico', 'Milpa Alta', 'Licenciatura en Administración Financiera y Sistemas', 'En Transervicios Logísticos del Norte S.A. ofrecemos servicios de transporte de carga terrestre, con cargas regulares o especializadas en toda la República Mexicana.', 'Licenciatura en Ingeniería Civil', 'Nuestro Candidato Ideal:\r\n-Conocimiento en mecanica electrica\r\n-Experiencia previa con mecanica automotriz - electrica\r\n-Conocimiento en gasolina y diesel', 'Bolsa de Trabajo', 'pivianuncio06', '2023-02-24 07:14:12'),
(72, 'Vendedor de campo en Hermosillo Sonora', ' Littlerock Elementary', 'Sonora', 'Hermosillo', 'Vendedor de campo', 'Ofrecemos:\r\n• Salario $5,000 Mensual libres\r\n• Comisión mensual 5% de venta de ruta no ganan menos de $10,000.\r\n• Sin prestaciones de ley.\r\n• Contrato por honorarios a través de factura\r\n• Horarios de trabajo abierto (libre)\r\n• Zona de trabajo Hermosillo Sonora', 'Licenciatura en Administración Financiera y Sistemas', 'Requisitos\r\n• Gusto por las ventas\r\n• Gusto por el trabajo en campo\r\n• Búsqueda de nuevo clientes\r\n• Seguimiento continuo', 'Proyectos', 'pivianuncio05', '2023-02-24 07:12:29'),
(71, 'Soldador Microalambre', 'The Cenobite Theatre', 'San_Luis_Potosi', 'Villa Juárez', 'Soldador Microalambre', 'Armado y Soldado de piezas, para la fabricación de los bastidores, con soldadura de micro alambre, cumpliendo los lineamientos\r\nArmado de Bastidores usando el equipo de medición (niveles, block escala, vernier y cinta métrica) y usando el plano de fabricación e interpretando la simbología de soldadura según aplica el producto.\r\nLlevar a cabo el movimiento de las piezas de gran dimensión y tamaño a través de los equipos de levante (grúa viajera o polipasto)\r\nAsegurar que se cumplan los lineamient', 'Licenciatura en Arquitectura', 'Nuestro Candidato Ideal:\r\n-Experiencia en soldadura de micro alambre\r\n-interpretación de dibujos\r\n-armado de piezas\r\n-polipastos', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 07:06:29'),
(70, 'MEDICO DICTAMINADOR', 'Sacred Heart Institute', 'Veracruz', 'Ixmatlahuacan', 'MEDICO DICTAMINADOR', 'Revisión de cuentas hospitalarias desde el\r\ningreso de la hospitalización hasta el alta de los asegurados atendidos en\r\nhospitales nacionales,\r\n· Revisión ágil de cuentas al egreso para desviar\r\ninsumos por sobreutilización y exclusiones por contrato de gastos médicos,', 'Licenciatura en Enfermería', 'Gestión interdisciplinaria (hospital y equipo médico)\r\nde casos hospitalarios,\r\n· Aclaración de insumos de alto costo con\r\nproveedores hospitalarios, médicos y equipo especializado,\r\n· Seguimiento a ahorros por desviaciones\r\nrealizadas durante la hospitalización o egresos,\r\n· Gestión de casos hospitalarios en hospitales\r\nnacionales asignados\r\n· Dictamen médico acorde a contrato de asegurados,\r\nrevisión de notas, informes médicos, notas de evolución, estudios asociados al\r\ndiagnóstico y coherenci', 'Bolsa de Trabajo', 'pivianuncio06', '2023-02-24 07:04:52'),
(69, 'Secretaria y Asistente ejecutiva', 'Newhart Group', 'Sinaloa', 'Mocorito', 'Secretaria y Asistente ejecutiva', 'Facturación y control de cuentas por cobrar\r\nAtención telefónica a clientes, proveedores y terceros.', 'Licenciatura en Actuaría', '2. Actualización de la agenda corporativa y personal de los ejecutivos y directores.\r\n3. Realización de escritos, cheques y llamadas para ejecutivos o directores.\r\n4. Tomar recados o mensajes en caso de que la persona no se encuentre y reportarlos de inmediato.\r\n5. Entrega y recepción de documentos.\r\n6. Control de los insumos de papelería, cartuchos de impresoras, cafetería y herramientas de trabajo para evitar desabasto.\r\n7. Sacar copias y escaneos según se requiera.\r\n8. Mantener limpia el área', 'Proyectos', 'pivianuncio05', '2023-02-24 07:01:44'),
(68, 'AUXILIAR CONTABLE', 'Harbor View College', 'Oaxaca', 'Asunción Cuyotepeji', 'AUXILIAR CONTABLE', 'DISTRIBUIDORA DE ENVASES PARA EL SECTOR DE VINOS Y LICORES, ALIMENTOS, CERVEZA Y MEDICINAL ESTA EN BUSQUEDA DE NUEVO TALENTO COMO “AUXILIAR CONTABLE”', 'Licenciatura en Contabilidad', 'REQUISITOS:\r\n· Edad: 25 a 40 años\r\n· Sexo: Indistinto\r\n· Licenciatura en Contabilidad o a fin\r\nEXPERIENCIA Y HABILIDADES:\r\n· Manejo de ERP de preferencia SAP business one, o equivalente.\r\n· Asientos contables.\r\n· Elaboración de reportes financieros.\r\n· Conocimiento de impuestos y leyes tributarias.\r\n· Depuración de cuentas.\r\n· Elaboración de la DIOT.', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 06:59:36'),
(67, 'SDR experto', 'Dulce Gallo', 'Guanajuato', 'Atarjea', 'SDR experto', 'Si no conoces el puesto, agradeceremos no te postules.\r\nResponsable de generar nuevas oportunidades de negocio y leads para el equipo de ventas de una empresa de servicios enfocada en la documentación y estandarización de procesos de negocio. Su rol se enfoca en las primeras etapas del proceso de ventas, incluyendo la generación de leads, la calificación y el desarrollo de relaciones.\r\nLos leads sería en empresas pequeñas y medianas, de cualquier sector, ubicadas en México y Latam.\r\nSe requiere ', 'Licenciatura en Mercadotecnia', 'Las responsabilidades principales del SDR incluyen:\r\nGeneración de leads: Investigar y identificar a posibles clientes, y contactarlos a través de canales como el correo electrónico, el teléfono o las redes sociales.\r\nCalificación de leads: Evaluar el potencial de los leads para determinar su ajuste y interés en los productos o servicios de la empresa.\r\nDesarrollo de relaciones: Construir relaciones con los leads a través de una comunicación regular, y proporcionarles información relevante para ', 'Bolsa de Trabajo', 'pivianuncio06', '2023-02-24 06:57:43'),
(65, 'SECRTETARIA RECEPCIONISTA', 'Dinosaurs In The Sky', 'Coahuila', 'Francisco I. Madero', 'SECRTETARIA RECEPCIONISTA', 'DESPACHO LEGAL DELEGACION MIGUEL HIDALGO LUNES A VIERNES 9 A 19 HRS SUELDO ATRACTIVO RECEPCION ADMINISTRACION CONMUTADOR REDES IP FACTURACION ATENCION A CLIENTES AGENDA DIRECTORIO MAGNIFICA PRESENTACION', 'Licenciatura en Administración', 'Microsoft Word - Avanzado', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 06:51:44'),
(64, 'Gerente nacional de ventas', 'Diamond University', 'Chiapas', 'Angel Albino Corzo', 'Gerente nacional de ventas', '¿Buscas una nueva oportunidad en el área comercial?\r\nGNP es una empresa con 122 años de experiencia, brindando estabilidad, certeza y un plan de carrera sólido y permanente.\r\nLa contingencia ha afectado a más de 18 millones de empleados, en GNP seguimos trabajando y generando ingresos desde nuestros hogares.\r\nConoce esta propuesta de negocio y deja que te llevemos al siguiente nivel.\r\nEste proyecto es para personas que tengan:\r\nLicenciatura en administración, finanzas o negocios\r\nSexo indistinto', 'Licenciatura Ejecutiva en Comercio', 'Capacitación personalizada virtual y campo\r\nEstabilidad y crecimiento\r\nBonos trimestrales y anuales\r\nViajes nacionales e internacionales\r\nIncentivos en especie o económicos\r\nMaster respaldado por ITAM\r\nIngresos sin límite', 'Bolsa de Trabajo', 'pivianuncio06', '2023-02-24 06:47:30'),
(66, 'COSMETOLOGA', 'East Shores School for Girls', 'Durango', 'El Oro', 'COSMETOLOGA', 'VALORAMOS :\r\nüGanas de crecer y aprender\r\nüExcelencia en servicio al cliente y atención al detalle\r\nüCarisma y empatía\r\nü Manejo de la palabra.', 'Licenciatura en Psicología', 'EXPERIENCIA: 1 año en Spa\r\n1 año en aparatología: microdermoabrasión, radiofrecuencia e IPL\r\n1 año en Tratamientos faciales\r\nCONOCIMIENTOS: CERTIFICADA ANTE LA SEP\r\nSUELDO MENSUAL: 10,000 + comision\r\nDIAS A LABORAR: Lunes a Domingo\r\nHORARIO A LABORAR: 10:30 am - 8:00 pm\r\nHORARIO COMIDA: 1 hora', 'Proyectos', 'pivianuncio05', '2023-02-24 06:55:37'),
(63, 'LA TEQUILA te invita a formar parte de su equipo de trabajo como Sous Chef', 'Aramark Theatre', 'Baja_California_Sur', 'Loreto', 'Becario en Gastronomia', 'Funciones:\r\nElaborar y capturar inventarios\r\nSeguimiento a bitácoras de temperaturas\r\nOrganizar y dar seguimiento al rol de limpieza\r\nControl y seguimiento de mermas\r\nAsignación y seguimiento de actividades del personal\r\nGestión de eventos especiales\r\nControl de incidencias del personal', 'Licenciatura en gastronomía', 'Requisitos:\r\nLicenciatura en gastronomía\r\nExperiencia sólida en parrilla, barra,caliente, barra fría\r\nConocimiento en panadería\r\nManejo efectivo de personal\r\nConocimiento de inventarios\r\nGestión de mermas\r\nDisponibilidad de tiempo', 'Proyectos', 'pivianuncio05', '2023-02-24 06:44:23'),
(62, 'Supervisor jr de alimentos y bebidas', ' Grapevine University', 'Baja_California', 'Tijuana', 'Supervisor jr de alimentos y bebidas', 'Requisitos:\r\nEscolaridad: Lic. en Gastronomía ( INDISPENSABLE )\r\nExperiencia: 2 a 3 años en restaurantes casual o fine dining como asesor/ consultor\r\nExcelente actitud de servicio.\r\nDisponibilidad de horario.\r\n', 'Licenciatura en Nutrición', 'Funciones:\r\nEjecutar y validar estándares de calidad y operación\r\nReporte de ventas, costos, administración general\r\nSupervisión de operación en tiempo real asegurando procedimientos en todas las áreas operativas (salón y cocina)\r\nEjecución de auditorias operativas para seguimiento de procesos\r\nEstablecer relaciones sanas y proactivas con los colaboradores.', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 06:52:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante_inhabilitada`
--

CREATE TABLE `vacante_inhabilitada` (
  `IDVacantes` int(11) NOT NULL,
  `Titulos_Vacantes` varchar(100) NOT NULL,
  `Emp_Inst_Vacantes` varchar(100) NOT NULL,
  `Estado_Vacantes` varchar(100) NOT NULL,
  `Delegacion_Vacantes` varchar(100) NOT NULL,
  `Cargo_Vacantes` varchar(100) NOT NULL,
  `Descripcion_Vacantes` varchar(500) NOT NULL,
  `Carrera_Vacantes` varchar(100) NOT NULL,
  `Conocimientos_Vacantes` varchar(500) NOT NULL,
  `Seccion_Vacantes` varchar(100) NOT NULL,
  `Color_Vacantes` varchar(100) NOT NULL,
  `Tiempo_Vacantes` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `vacante_inhabilitada`
--

INSERT INTO `vacante_inhabilitada` (`IDVacantes`, `Titulos_Vacantes`, `Emp_Inst_Vacantes`, `Estado_Vacantes`, `Delegacion_Vacantes`, `Cargo_Vacantes`, `Descripcion_Vacantes`, `Carrera_Vacantes`, `Conocimientos_Vacantes`, `Seccion_Vacantes`, `Color_Vacantes`, `Tiempo_Vacantes`) VALUES
(66, 'ANALISTA DE COMPRAS', 'Newhart Group', 'Estado_de_Mexico', 'Ayapango', 'ANALISTA DE COMPRAS', '¡Nos gustaría que te incorpores a nuestro equipo para importante empresa de Comercio de Calzado y Accesorios de Moda!', 'Licenciatura en Negocios Internacionales', 'Requisitos:\r\nSexo: Indistinto\r\nEscolaridad: Relaciones Internacionales / Comercio Exterior o afín.\r\nExperiencia 2 años con mismo puesto\r\nIdioma Ingles: Intermedio', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 07:52:16'),
(67, 'Asesor Financiero', 'Summers Academy', 'Colima', 'Tecomán', 'Asesor Financiero', '¡AQUÍ HAY TRABAJO!\r\nSé emprendedor e intégrate hoy a nuestro Equipo de Asesores\r\nFinancieros\r\nSi buscas\r\nMAYOR DESARROLLO ECONÓMICO Y PROFESIONAL te queremos en nuestro equipo como\r\nAsesor Financiero.\r\nContamos con el respaldo, liderazgo, innovación y solidez\r\neconómica de Grupo Financiero Inbursa Inmejorable\r\ncalidad y AMPLIO PORTAFOLIO DE PRODUCTOS.', 'Licenciatura en Diseño Industrial', 'Requisitos:\r\nMayores de 18 años.\r\nPreparatoria\r\nExcelente presentación\r\nDisponibilidad inmediata\r\nFacilidad para relacionarse y gusto por las ventas y servicio al\r\ncliente\r\nOrientado a logro de objetivos.', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 07:52:21'),
(68, 'Vendedores de servicio de cable', 'East Shores College', 'Guanajuato', 'Coroneo', 'Vendedores de servicio de cable', 'Somos una empresa 100% mexicana con más de 25 años de experiencia en conectar el talento con las empresas.', 'Licenciatura en Turismo', 'Venta de Servicios de Internet y Telefonía Fija y por Cable\r\nVenta de Servicios de Internet y Telefonía Fija y por Cable\r\nHorario: Lunes a Sabado 10:00am a 7:00pm\r\n¡¡¡Sueldo y Comisiones SEMANAL!!!\r\nOfrecemos:\r\nPrestaciones de Ley\r\nSeguro de vida\r\nVales de Despensa 5%\r\nIMSS y Aguinaldo Integrado a Ingresos Totales (Sueldo + Comisiones)', 'SS-PP-RP-B', 'pivianuncio01', '2023-02-24 07:52:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`IDContacto`);

--
-- Indices de la tabla `datos_usuario`
--
ALTER TABLE `datos_usuario`
  ADD PRIMARY KEY (`IDDUsuario`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`IDEmpresa`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`IDInstitucion`);

--
-- Indices de la tabla `postulados_aceptados`
--
ALTER TABLE `postulados_aceptados`
  ADD PRIMARY KEY (`IDUPAceptados`);

--
-- Indices de la tabla `postulados_rechazados`
--
ALTER TABLE `postulados_rechazados`
  ADD PRIMARY KEY (`IDUPAceptados`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDUsuario`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`IDVacantes`);

--
-- Indices de la tabla `vacante_inhabilitada`
--
ALTER TABLE `vacante_inhabilitada`
  ADD PRIMARY KEY (`IDVacantes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `IDContacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `datos_usuario`
--
ALTER TABLE `datos_usuario`
  MODIFY `IDDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `IDEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `IDInstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `postulados_aceptados`
--
ALTER TABLE `postulados_aceptados`
  MODIFY `IDUPAceptados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `postulados_rechazados`
--
ALTER TABLE `postulados_rechazados`
  MODIFY `IDUPAceptados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de la tabla `vacante`
--
ALTER TABLE `vacante`
  MODIFY `IDVacantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `vacante_inhabilitada`
--
ALTER TABLE `vacante_inhabilitada`
  MODIFY `IDVacantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
