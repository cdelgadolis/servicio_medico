--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: actividad; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE actividad (
    id_actividad integer NOT NULL,
    actividad character varying(250) NOT NULL,
    lugar character varying(100) NOT NULL,
    responsable character varying(100) NOT NULL,
    hora_entrada character varying(8) NOT NULL,
    hora_salida character varying(8),
    fecha_entrada date NOT NULL,
    fecha_salida date NOT NULL,
    fk_estatus integer,
    es_activo boolean DEFAULT true NOT NULL,
    fecha_creacion date DEFAULT now(),
    usuario_creacion integer,
    fecha_actualizacion date DEFAULT now(),
    usuario_actualizacion integer,
    fk_sede integer NOT NULL,
    descripcion text
);


ALTER TABLE public.actividad OWNER TO postgres;

--
-- Name: actividad_id_actividad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE actividad_id_actividad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.actividad_id_actividad_seq OWNER TO postgres;

--
-- Name: actividad_id_actividad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE actividad_id_actividad_seq OWNED BY actividad.id_actividad;


--
-- Name: dias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dias (
    id_dia integer NOT NULL,
    dia character varying(100),
    status boolean,
    fecha_creacion date DEFAULT now(),
    usuario_creacion integer,
    fecha_actualizacion date DEFAULT now(),
    usuario_actualizacion integer
);


ALTER TABLE public.dias OWNER TO postgres;

--
-- Name: dias_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE dias_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.dias_id_dia_seq OWNER TO postgres;

--
-- Name: dias_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE dias_id_dia_seq OWNED BY dias.id_dia;


--
-- Name: especialidad; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE especialidad (
    id_especialidad integer NOT NULL,
    descripcion character varying(100),
    sede integer,
    es_activo boolean DEFAULT true NOT NULL,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    usuario_creacion integer,
    usuario_actualizacion integer
);


ALTER TABLE public.especialidad OWNER TO postgres;

--
-- Name: especialidad_id_especialidad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE especialidad_id_especialidad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.especialidad_id_especialidad_seq OWNER TO postgres;

--
-- Name: especialidad_id_especialidad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE especialidad_id_especialidad_seq OWNED BY especialidad.id_especialidad;


--
-- Name: estado; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE estado (
    id_estado integer NOT NULL,
    nombre character varying(100),
    siglas character varying(2),
    estatus boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer
);


ALTER TABLE public.estado OWNER TO postgres;

--
-- Name: estado_civil; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE estado_civil (
    id_edo_civil integer NOT NULL,
    edo_civil character varying(100),
    fecha_creacion date DEFAULT now(),
    usuario_actualizacion integer,
    usuario_creacion integer,
    status boolean,
    fecha_actualizacion date DEFAULT now()
);


ALTER TABLE public.estado_civil OWNER TO postgres;

--
-- Name: estado_civil_id_edo_civil_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE estado_civil_id_edo_civil_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estado_civil_id_edo_civil_seq OWNER TO postgres;

--
-- Name: estado_civil_id_edo_civil_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE estado_civil_id_edo_civil_seq OWNED BY estado_civil.id_edo_civil;


--
-- Name: estado_id_estado_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE estado_id_estado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estado_id_estado_seq OWNER TO postgres;

--
-- Name: estado_id_estado_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE estado_id_estado_seq OWNED BY estado.id_estado;


--
-- Name: evolucion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE evolucion (
    id_evaluacion integer NOT NULL,
    paciente integer NOT NULL,
    motivo_consulta character varying(30),
    tension_alta character varying(20),
    frecuencia_cardiaca character varying(20),
    frecuencia_respiratoria character varying(20),
    peso character varying(10),
    talla character varying(10),
    pulso character varying(10),
    circunferencia_cefalica character varying(20),
    circunferencia_abdominal character varying(20),
    otros_sv character varying(100),
    examen_fisico text NOT NULL,
    laboratorio text,
    imageneologia text,
    otros_examenes text,
    impresion_diagnostica text NOT NULL,
    plan_tratamiento text NOT NULL,
    reposo boolean,
    observacion text,
    fecha_creacion date DEFAULT now(),
    usuario_creacion integer,
    fecha_actualizacion date DEFAULT now(),
    usuario_actualizacion integer,
    status boolean
);


ALTER TABLE public.evolucion OWNER TO postgres;

--
-- Name: evolucion_id_evaluacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE evolucion_id_evaluacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.evolucion_id_evaluacion_seq OWNER TO postgres;

--
-- Name: evolucion_id_evaluacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE evolucion_id_evaluacion_seq OWNED BY evolucion.id_evaluacion;


--
-- Name: historia_clinica; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE historia_clinica (
    id_historia_clinica integer NOT NULL,
    paciente integer NOT NULL,
    peso character varying(3),
    talla character varying(3),
    frecuencia_cardiaca character varying(10),
    frecuencia_respiratoria character varying(10),
    tension_alta character varying(10),
    pulso character varying(10),
    circunferencia_cefalica character varying(10),
    circunferencia_abdominal character varying(10),
    otros character varying(100),
    alergico character varying(200),
    medicacion character varying(200),
    enfermedades text,
    observacion text NOT NULL,
    comentarios text NOT NULL,
    impresion_diagnostica text NOT NULL,
    tratamiento text NOT NULL,
    evolucion text NOT NULL,
    laboratorio text NOT NULL,
    examenes_otros text NOT NULL,
    estatus boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer,
    imageneologia text,
    plan_tratamiento text,
    examen_fisico text,
    motivo_consulta text NOT NULL,
    enfermedad_actual text NOT NULL,
    antecedentes_personales text NOT NULL,
    padre text,
    madre text,
    hermanos text,
    otros_hp text,
    fumar character varying(50),
    alcohol character varying(50),
    cafe character varying(50),
    drogas character varying(50),
    m_mejillas character varying(50),
    m_labios character varying(50),
    m_unas character varying(50),
    otros_habitosp text,
    "FRS" character varying(100),
    "FUR" character varying(100),
    "PRS" character varying(100),
    "CICLO" character varying(100),
    sinusorragia character varying(100),
    orgasmos character varying(100),
    maridos character varying(100),
    infeccion_ur character varying(100),
    dispareunia character varying(100),
    libido character varying(100),
    "AVM" character varying(100),
    "DIU" character varying(100),
    "EIP" character varying(100),
    "ACO" character varying(100),
    lactancia character varying(100),
    puerperio character varying(100),
    gestas text
);


ALTER TABLE public.historia_clinica OWNER TO postgres;

--
-- Name: historia_clinica_id_historia_clinica_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE historia_clinica_id_historia_clinica_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.historia_clinica_id_historia_clinica_seq OWNER TO postgres;

--
-- Name: historia_clinica_id_historia_clinica_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE historia_clinica_id_historia_clinica_seq OWNED BY historia_clinica.id_historia_clinica;


--
-- Name: historia_clinica_maf_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE historia_clinica_maf_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.historia_clinica_maf_seq OWNER TO postgres;

--
-- Name: historia_clinica_maf_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE historia_clinica_maf_seq OWNED BY historia_clinica.madre;


--
-- Name: historia_clinica_psicologia; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE historia_clinica_psicologia (
    id_hc_psicologia integer NOT NULL,
    paciente integer NOT NULL,
    fecha_ingreso date DEFAULT now(),
    hora time without time zone NOT NULL,
    nombre_padre character varying(30),
    nombre_madre character varying(30),
    nombre_conyugue character varying(30),
    referido text NOT NULL,
    motivo_consulta text NOT NULL,
    enfermedad_actual text NOT NULL,
    antecedentes_familiares text NOT NULL,
    padre text,
    madre text,
    hermanos text,
    otros text,
    antecedentes_personales text NOT NULL,
    tabaco character varying(50),
    alcohol character varying(50),
    drogas character varying(50),
    otros_hp text,
    examen_fisico text NOT NULL,
    tension_alta character varying(10),
    frecuencia_cardiaca character varying(10),
    frecuencia_respiratoria character varying(10),
    talla character varying(3),
    peso character varying(3),
    pulso character varying(10),
    examen_mental text,
    impresion_diagnostica text NOT NULL,
    plan_tratamiento text NOT NULL,
    observacion text NOT NULL,
    comentarios text NOT NULL,
    estatus boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer
);


ALTER TABLE public.historia_clinica_psicologia OWNER TO postgres;

--
-- Name: historia_clinica_psicologia_id_hc_psicologia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE historia_clinica_psicologia_id_hc_psicologia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.historia_clinica_psicologia_id_hc_psicologia_seq OWNER TO postgres;

--
-- Name: historia_clinica_psicologia_id_hc_psicologia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE historia_clinica_psicologia_id_hc_psicologia_seq OWNED BY historia_clinica_psicologia.id_hc_psicologia;


--
-- Name: historia_clinica_psiquiatrica; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE historia_clinica_psiquiatrica (
    id_hc_psiquiatrica integer NOT NULL,
    paciente integer NOT NULL,
    fecha_ingreso date DEFAULT now(),
    hora time without time zone NOT NULL,
    nombre_padre character varying(30),
    nombre_madre character varying(30),
    nombre_conyugue character varying(30),
    referido text NOT NULL,
    motivo_consulta text NOT NULL,
    enfermedad_actual text NOT NULL,
    antecedentes_familiares text NOT NULL,
    padre text,
    madre text,
    hermanos text,
    otros text,
    antecedentes_personales text NOT NULL,
    tabaco character varying(50),
    alcohol character varying(50),
    drogas character varying(50),
    otros_hp text,
    examen_fisico text NOT NULL,
    tension_alta character varying(10),
    frecuencia_cardiaca character varying(10),
    frecuencia_respiratoria character varying(10),
    talla character varying(3),
    peso character varying(3),
    pulso character varying(10),
    examen_mental text,
    impresion_diagnostica text NOT NULL,
    plan_tratamiento text NOT NULL,
    observacion text NOT NULL,
    comentarios text NOT NULL,
    estatus boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer
);


ALTER TABLE public.historia_clinica_psiquiatrica OWNER TO postgres;

--
-- Name: historia_clinica_psiquiatrica_id_hc_psiquiatrica_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE historia_clinica_psiquiatrica_id_hc_psiquiatrica_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.historia_clinica_psiquiatrica_id_hc_psiquiatrica_seq OWNER TO postgres;

--
-- Name: historia_clinica_psiquiatrica_id_hc_psiquiatrica_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE historia_clinica_psiquiatrica_id_hc_psiquiatrica_seq OWNED BY historia_clinica_psiquiatrica.id_hc_psiquiatrica;


--
-- Name: institucion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE institucion (
    id_institucion integer NOT NULL,
    nombre character varying(100),
    rif character varying(20),
    direccion character varying(200),
    telefono character varying(15),
    telefono2 character varying(15),
    fecha_creacion timestamp without time zone DEFAULT now(),
    usuario_actualizacion integer,
    usuario_creacion integer,
    status boolean,
    fecha_actualizacion timestamp without time zone DEFAULT now()
);


ALTER TABLE public.institucion OWNER TO postgres;

--
-- Name: institucion_id_institucion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE institucion_id_institucion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.institucion_id_institucion_seq OWNER TO postgres;

--
-- Name: institucion_id_institucion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE institucion_id_institucion_seq OWNED BY institucion.id_institucion;


--
-- Name: medico_horario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE medico_horario (
    id_medico_horario integer NOT NULL,
    medico integer NOT NULL,
    dia integer NOT NULL,
    hora_entrada time without time zone NOT NULL,
    hora_salida time with time zone NOT NULL,
    es_activo boolean DEFAULT true NOT NULL,
    fecha_creacion date DEFAULT now(),
    usuario_creacion integer,
    fecha_actualizacion date DEFAULT now(),
    usuario_actualizacion integer
);


ALTER TABLE public.medico_horario OWNER TO postgres;

--
-- Name: medico_horario_id_medico_horario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE medico_horario_id_medico_horario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.medico_horario_id_medico_horario_seq OWNER TO postgres;

--
-- Name: medico_horario_id_medico_horario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE medico_horario_id_medico_horario_seq OWNED BY medico_horario.id_medico_horario;


--
-- Name: medicos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE medicos (
    id_medico integer NOT NULL,
    nombres character varying(100),
    apellidos character varying(100),
    especialidad integer,
    telefono_oficina character varying(15),
    telefono_celular character varying(15) NOT NULL,
    correo character varying(50) NOT NULL,
    status boolean,
    nro_medico character varying(50),
    cant_paciente_dia integer,
    foto character varying(200) DEFAULT 'foto-medico.png'::character varying,
    fecha_creacion date DEFAULT now(),
    usuario_creacion integer,
    fecha_actualizacion date DEFAULT now(),
    usuario_actualizacion integer,
    sede integer
);


ALTER TABLE public.medicos OWNER TO postgres;

--
-- Name: medicos_id_medico_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE medicos_id_medico_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.medicos_id_medico_seq OWNER TO postgres;

--
-- Name: medicos_id_medico_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE medicos_id_medico_seq OWNED BY medicos.id_medico;


--
-- Name: municipio; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE municipio (
    id_municipio integer NOT NULL,
    estado integer NOT NULL,
    nombre character varying(100),
    estatus boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer
);


ALTER TABLE public.municipio OWNER TO postgres;

--
-- Name: municipio_id_municipio_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE municipio_id_municipio_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.municipio_id_municipio_seq OWNER TO postgres;

--
-- Name: municipio_id_municipio_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE municipio_id_municipio_seq OWNED BY municipio.id_municipio;


--
-- Name: paciente; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE paciente (
    id_paciente integer NOT NULL,
    cedula character varying(15) NOT NULL,
    numero_historia character varying(15),
    nombre character varying(70) NOT NULL,
    apellido character varying(70) NOT NULL,
    fecha_nacimiento timestamp without time zone DEFAULT now(),
    sexo character(1) NOT NULL,
    estado_civil integer NOT NULL,
    tipo_persona integer NOT NULL,
    tipo_trabajador integer,
    institucion integer,
    departamento character varying(90),
    ocupacion character varying(90),
    cedula_representante character varying(15),
    nombre_representante character varying(70),
    parentesco integer,
    fk_estado integer,
    direccion character varying(200) NOT NULL,
    lugar_nacimiento character varying(200) NOT NULL,
    telefono_celular character varying(15) NOT NULL,
    telefono_oficina character varying(15),
    telefono_fijo character varying(15),
    correo character varying(50) NOT NULL,
    foto character varying(200) DEFAULT 'foto-paciente.png'::character varying,
    estatus boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer,
    nacionalidad character(1) NOT NULL,
    correo_sec character varying(50)
);


ALTER TABLE public.paciente OWNER TO postgres;

--
-- Name: paciente_id_paciente_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE paciente_id_paciente_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.paciente_id_paciente_seq OWNER TO postgres;

--
-- Name: paciente_id_paciente_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE paciente_id_paciente_seq OWNED BY paciente.id_paciente;


--
-- Name: parentesco; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE parentesco (
    id_parentesco integer NOT NULL,
    parentesco character varying(100),
    fecha_creacion date DEFAULT now(),
    usuario_actualizacion integer,
    usuario_creacion integer,
    status boolean,
    fecha_actualizacion date DEFAULT now()
);


ALTER TABLE public.parentesco OWNER TO postgres;

--
-- Name: parentesco_id_parentesco_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE parentesco_id_parentesco_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.parentesco_id_parentesco_seq OWNER TO postgres;

--
-- Name: parentesco_id_parentesco_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE parentesco_id_parentesco_seq OWNED BY parentesco.id_parentesco;


--
-- Name: parroquia; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE parroquia (
    id_parroquia integer NOT NULL,
    municipio integer NOT NULL,
    nombre character varying(100),
    estatus boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer
);


ALTER TABLE public.parroquia OWNER TO postgres;

--
-- Name: parroquia_id_parroquia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE parroquia_id_parroquia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.parroquia_id_parroquia_seq OWNER TO postgres;

--
-- Name: parroquia_id_parroquia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE parroquia_id_parroquia_seq OWNED BY parroquia.id_parroquia;


--
-- Name: patologias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE patologias (
    id_tipo_patologia integer NOT NULL,
    patologia character varying(100),
    fecha_creacion date DEFAULT now(),
    usuario_creacion integer,
    fecha_actualizacion date DEFAULT now(),
    usuario_actualizacion integer,
    status boolean
);


ALTER TABLE public.patologias OWNER TO postgres;

--
-- Name: patologias_id_tipo_patologia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE patologias_id_tipo_patologia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.patologias_id_tipo_patologia_seq OWNER TO postgres;

--
-- Name: patologias_id_tipo_patologia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE patologias_id_tipo_patologia_seq OWNED BY patologias.id_tipo_patologia;


--
-- Name: reposo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE reposo (
    id_reposo integer NOT NULL,
    paciente integer NOT NULL,
    tiempo_reposo integer NOT NULL,
    medida_reposo character varying(200),
    observacion character varying(200),
    estatus boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer
);


ALTER TABLE public.reposo OWNER TO postgres;

--
-- Name: reposo_id_reposo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE reposo_id_reposo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.reposo_id_reposo_seq OWNER TO postgres;

--
-- Name: reposo_id_reposo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE reposo_id_reposo_seq OWNED BY reposo.id_reposo;


--
-- Name: sede; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE sede (
    id_sede integer NOT NULL,
    sede character varying(100),
    direccion character varying(500),
    estado integer NOT NULL,
    foto_sede character varying,
    horario_entrada character varying,
    horario_salida character varying,
    contacto character varying(100),
    correo_sede character varying(100),
    nombre_responsable character varying(50),
    cedula_responsable integer,
    es_activo boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer,
    telefono_1 character varying(15),
    telefono_2 character varying(15),
    telefono_3 character varying(15)
);


ALTER TABLE public.sede OWNER TO postgres;

--
-- Name: sede_foto; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE sede_foto (
    id_sede_foto integer NOT NULL,
    fk_sede integer NOT NULL,
    foto character varying(200),
    descripcion_foto character varying(300),
    es_activo boolean DEFAULT true,
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer
);


ALTER TABLE public.sede_foto OWNER TO postgres;

--
-- Name: sede_foto_id_sede_foto_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE sede_foto_id_sede_foto_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sede_foto_id_sede_foto_seq OWNER TO postgres;

--
-- Name: sede_foto_id_sede_foto_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE sede_foto_id_sede_foto_seq OWNED BY sede_foto.id_sede_foto;


--
-- Name: sede_id_sede_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE sede_id_sede_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sede_id_sede_seq OWNER TO postgres;

--
-- Name: sede_id_sede_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE sede_id_sede_seq OWNED BY sede.id_sede;


--
-- Name: solicitud; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE solicitud (
    id_solicitud integer NOT NULL,
    fk_paciente integer NOT NULL,
    fk_sede integer,
    fk_especialidad integer NOT NULL,
    fecha_solicitud date NOT NULL,
    hora time with time zone,
    motivo_consulta character varying(300),
    medico_referido character varying(200),
    fecha_creacion date DEFAULT now(),
    usuario_creacion integer,
    es_activo boolean DEFAULT true,
    fk_medico integer NOT NULL
);


ALTER TABLE public.solicitud OWNER TO postgres;

--
-- Name: solicitud_id_solicitud_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE solicitud_id_solicitud_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.solicitud_id_solicitud_seq OWNER TO postgres;

--
-- Name: solicitud_id_solicitud_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE solicitud_id_solicitud_seq OWNED BY solicitud.id_solicitud;


--
-- Name: tipo_persona; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_persona (
    id_tipo_persona integer NOT NULL,
    tipo_persona character varying(100),
    fecha_creacion date DEFAULT now(),
    usuario_actualizacion integer,
    usuario_creacion integer,
    status boolean,
    fecha_actualizacion date DEFAULT now()
);


ALTER TABLE public.tipo_persona OWNER TO postgres;

--
-- Name: tipo_persona_id_tipo_persona_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_persona_id_tipo_persona_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipo_persona_id_tipo_persona_seq OWNER TO postgres;

--
-- Name: tipo_persona_id_tipo_persona_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipo_persona_id_tipo_persona_seq OWNED BY tipo_persona.id_tipo_persona;


--
-- Name: tipo_trabajador; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_trabajador (
    id_tipo_trabajador integer NOT NULL,
    tipo_trabajador character varying(100),
    fecha_creacion date DEFAULT now(),
    usuario_actualizacion integer,
    usuario_creacion integer,
    status boolean,
    fecha_actualizacion date DEFAULT now()
);


ALTER TABLE public.tipo_trabajador OWNER TO postgres;

--
-- Name: tipo_trabajador_id_tipo_trabajador_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_trabajador_id_tipo_trabajador_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipo_trabajador_id_tipo_trabajador_seq OWNER TO postgres;

--
-- Name: tipo_trabajador_id_tipo_trabajador_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipo_trabajador_id_tipo_trabajador_seq OWNED BY tipo_trabajador.id_tipo_trabajador;


--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    id_usuario integer NOT NULL,
    usuario character varying(13) NOT NULL,
    clave character varying(80) NOT NULL,
    nombre character varying(70) NOT NULL,
    apellido character varying(70) NOT NULL,
    telefono_oficina character varying(15),
    telefono_celular character varying(15) NOT NULL,
    correo character varying(50) NOT NULL,
    estatus boolean DEFAULT true,
    perfil character varying(20),
    fecha_creacion timestamp without time zone DEFAULT now(),
    fecha_actualizacion timestamp without time zone DEFAULT now(),
    fk_usuario_creacion integer,
    fk_usuario_actualizacion integer
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_usuario_seq OWNER TO postgres;

--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuario_id_usuario_seq OWNED BY usuario.id_usuario;


--
-- Name: id_actividad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actividad ALTER COLUMN id_actividad SET DEFAULT nextval('actividad_id_actividad_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dias ALTER COLUMN id_dia SET DEFAULT nextval('dias_id_dia_seq'::regclass);


--
-- Name: id_especialidad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY especialidad ALTER COLUMN id_especialidad SET DEFAULT nextval('especialidad_id_especialidad_seq'::regclass);


--
-- Name: id_estado; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estado ALTER COLUMN id_estado SET DEFAULT nextval('estado_id_estado_seq'::regclass);


--
-- Name: id_edo_civil; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estado_civil ALTER COLUMN id_edo_civil SET DEFAULT nextval('estado_civil_id_edo_civil_seq'::regclass);


--
-- Name: id_evaluacion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evolucion ALTER COLUMN id_evaluacion SET DEFAULT nextval('evolucion_id_evaluacion_seq'::regclass);


--
-- Name: id_historia_clinica; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historia_clinica ALTER COLUMN id_historia_clinica SET DEFAULT nextval('historia_clinica_id_historia_clinica_seq'::regclass);


--
-- Name: id_hc_psicologia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historia_clinica_psicologia ALTER COLUMN id_hc_psicologia SET DEFAULT nextval('historia_clinica_psicologia_id_hc_psicologia_seq'::regclass);


--
-- Name: id_hc_psiquiatrica; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historia_clinica_psiquiatrica ALTER COLUMN id_hc_psiquiatrica SET DEFAULT nextval('historia_clinica_psiquiatrica_id_hc_psiquiatrica_seq'::regclass);


--
-- Name: id_institucion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY institucion ALTER COLUMN id_institucion SET DEFAULT nextval('institucion_id_institucion_seq'::regclass);


--
-- Name: id_medico_horario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medico_horario ALTER COLUMN id_medico_horario SET DEFAULT nextval('medico_horario_id_medico_horario_seq'::regclass);


--
-- Name: id_medico; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medicos ALTER COLUMN id_medico SET DEFAULT nextval('medicos_id_medico_seq'::regclass);


--
-- Name: id_municipio; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY municipio ALTER COLUMN id_municipio SET DEFAULT nextval('municipio_id_municipio_seq'::regclass);


--
-- Name: id_paciente; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paciente ALTER COLUMN id_paciente SET DEFAULT nextval('paciente_id_paciente_seq'::regclass);


--
-- Name: id_parentesco; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY parentesco ALTER COLUMN id_parentesco SET DEFAULT nextval('parentesco_id_parentesco_seq'::regclass);


--
-- Name: id_parroquia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY parroquia ALTER COLUMN id_parroquia SET DEFAULT nextval('parroquia_id_parroquia_seq'::regclass);


--
-- Name: id_tipo_patologia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY patologias ALTER COLUMN id_tipo_patologia SET DEFAULT nextval('patologias_id_tipo_patologia_seq'::regclass);


--
-- Name: id_reposo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reposo ALTER COLUMN id_reposo SET DEFAULT nextval('reposo_id_reposo_seq'::regclass);


--
-- Name: id_sede; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sede ALTER COLUMN id_sede SET DEFAULT nextval('sede_id_sede_seq'::regclass);


--
-- Name: id_sede_foto; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sede_foto ALTER COLUMN id_sede_foto SET DEFAULT nextval('sede_foto_id_sede_foto_seq'::regclass);


--
-- Name: id_solicitud; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud ALTER COLUMN id_solicitud SET DEFAULT nextval('solicitud_id_solicitud_seq'::regclass);


--
-- Name: id_tipo_persona; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_persona ALTER COLUMN id_tipo_persona SET DEFAULT nextval('tipo_persona_id_tipo_persona_seq'::regclass);


--
-- Name: id_tipo_trabajador; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_trabajador ALTER COLUMN id_tipo_trabajador SET DEFAULT nextval('tipo_trabajador_id_tipo_trabajador_seq'::regclass);


--
-- Name: id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario ALTER COLUMN id_usuario SET DEFAULT nextval('usuario_id_usuario_seq'::regclass);


--
-- Data for Name: actividad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY actividad (id_actividad, actividad, lugar, responsable, hora_entrada, hora_salida, fecha_entrada, fecha_salida, fk_estatus, es_activo, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion, fk_sede, descripcion) FROM stdin;
1	Primera Jornada de Salud	Sala Manuel Segundo Sanchez - Ap2	Dr. Pablo Torres	9:00 AM	12:00 PM	2016-01-19	2016-01-19	1	t	2016-10-17	1	2016-10-17	\N	1	Medicina General, Oftalmología (entrega de lentes), Ginecología, Laboratorio.
2	Segunda Jornada de Salud	Sala Manuel Segundo Sanchez - Ap2	Dr. Pablo Torres	8:00 AM	12:00 PM	2016-02-23	2016-02-23	1	t	2016-10-17	1	2016-10-17	\N	1	Medicina General, Laboratorio, Entrega de resultados de la jornada anterior.
3	Tercera Jornada de Salud	Sala Manuel Segundo Sanchez - Ap2	Dr. Pablo Torres	8:00 AM	12:00 PM	2016-03-08	2016-03-08	1	t	2016-10-17	1	2016-10-17	\N	1	Medicina General, Odontología, Laboratorio, Entrega de exámenes anteriores.
4	Cuarta Jornada de Salud	Servicio Médico "Lic. Pedro Torres" - Ap0	Dr. Pablo Torres	8:00 AM	12:00 PM	2016-04-05	2016-04-05	1	t	2016-10-17	1	2016-10-17	\N	1	Medicina General, Entrega de medicinas, Laboratorio, Entrega de exámenes anteriores.
5	Quinta Jornada de Salud	Servicio Médico "Lic. Pedro Torres" - Ap0	Dr. Pablo Torres	8:00 AM	1:00 AM	2016-06-07	2016-06-07	1	t	2016-10-17	1	2016-10-17	\N	1	Medicina General, Odontología, Laboratorio (solo antígeno prostático), Charla y examen físico de despistaje de cáncer de próstata.\r\nEs  importar  señalar que  para  los  exámenes  de  laboratorio  deberán  estar  en  ayuna  y  en abstinencia sexual por 48 horas con  orden médica en caso de poseerla.
\.


--
-- Name: actividad_id_actividad_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('actividad_id_actividad_seq', 5, true);


--
-- Data for Name: dias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY dias (id_dia, dia, status, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion) FROM stdin;
2	Lunes	t	2016-11-03	1	2016-11-03	1
1	Domingo	f	2016-09-13	1	2016-11-03	1
3	Martes	t	2016-11-03	1	2016-11-03	1
4	Miercoles	t	2016-11-03	1	2016-11-03	1
5	Jueves	t	2016-11-22	1	2016-11-22	1
6	Viernes	t	2016-11-22	1	2016-11-22	1
7	Sabado	f	2016-11-22	1	2016-11-22	1
\.


--
-- Name: dias_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('dias_id_dia_seq', 7, true);


--
-- Data for Name: especialidad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY especialidad (id_especialidad, descripcion, sede, es_activo, fecha_creacion, fecha_actualizacion, usuario_creacion, usuario_actualizacion) FROM stdin;
1	Odontología	1	t	2016-09-13 09:53:30.304204	2016-09-13 09:53:30.304204	1	\N
2	Medicina General	1	t	2016-09-14 04:08:52.79671	2016-09-14 04:08:52.79671	1	\N
3	Psiquiatría	1	t	2016-09-14 04:12:18.920649	2016-09-14 04:12:18.920649	1	\N
5	Gineco-Obtetricia	1	t	2016-11-22 11:52:26.624587	2016-11-22 11:52:26.624587	1	\N
6	Rehabilitación Terapia Ocupacional	1	t	2016-11-22 11:52:55.26471	2016-11-22 11:52:55.26471	1	\N
7	Oftamología	1	t	2016-11-22 11:53:13.674403	2016-11-22 11:53:13.674403	1	\N
8	Pediatría	1	t	2016-11-22 11:54:09.67711	2016-11-22 11:54:09.67711	1	\N
10	Médico Cirujano	1	t	2016-11-22 11:54:59.793755	2016-11-22 11:54:59.793755	1	\N
11	Psicologia Clinica	1	t	2016-11-22 11:55:29.964314	2016-11-22 11:55:29.964314	1	\N
12	Traumatologia	1	t	2016-11-22 11:55:50.322306	2016-11-22 11:55:50.322306	1	\N
9	Médico Integral	1	t	2016-11-22 11:54:43.323458	2016-11-22 00:00:00	1	1
13	Medicina General	2	t	2016-11-22 12:01:09.99401	2016-11-22 12:01:09.99401	1	\N
14	Medicina General	3	t	2016-11-22 12:01:42.958316	2016-11-22 12:01:42.958316	1	\N
15	Nutricionista	3	t	2016-11-22 12:02:49.886859	2016-11-22 12:02:49.886859	1	\N
16	Psicologia	3	t	2016-11-22 12:05:07.724226	2016-11-22 12:05:07.724226	1	\N
17	Medicina General	4	t	2016-11-22 12:05:49.501609	2016-11-22 12:05:49.501609	1	\N
18	Fisioterapia	4	t	2016-11-22 12:06:22.15408	2016-11-22 12:06:22.15408	1	\N
19	Psicologia	4	t	2016-11-22 12:08:23.044942	2016-11-22 12:08:23.044942	1	\N
4	Médico Internista	1	t	2016-09-14 04:13:42.105559	2016-11-22 00:00:00	1	1
\.


--
-- Name: especialidad_id_especialidad_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('especialidad_id_especialidad_seq', 19, true);


--
-- Data for Name: estado; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY estado (id_estado, nombre, siglas, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion) FROM stdin;
2	Anzoátegui	AN	t	2015-08-25 11:29:30.253165	\N	1	\N
1	Amazonas	AM	t	2015-08-25 11:29:18.538547	\N	1	\N
3	Apure	AP	t	2015-08-25 14:07:37.226565	\N	1	\N
4	Aragua	AR	t	2015-08-25 14:09:31.918425	\N	1	\N
5	Barinas	BA	t	2015-08-25 14:10:33.536987	\N	1	\N
6	BolÃ­var	BO	t	2015-08-25 14:10:48.28322	\N	1	\N
7	Carabobo	CA	t	2015-08-25 14:11:03.172771	\N	1	\N
8	Cojedes	CO	t	2015-08-25 14:11:20.165195	\N	1	\N
9	Delta Amacuro	DA	t	2015-08-25 14:11:35.894017	\N	1	\N
10	Distrito Capital	DC	t	2015-08-25 14:11:55.891623	\N	1	\N
11	Falcón	FA	t	2015-08-25 14:12:05.615864	\N	1	\N
12	Guárico	GU	t	2015-08-25 14:12:22.885827	\N	1	\N
13	Lara	LA	t	2015-08-25 14:12:40.302746	\N	1	\N
14	Mérida	ME	t	2015-08-25 14:13:15.962726	\N	1	\N
15	Miranda	MI	t	2015-08-25 14:13:21.45205	\N	1	\N
16	Monagas	MO	t	2015-08-25 14:13:33.698225	\N	1	\N
17	Nueva Esparta	NE	t	2015-08-25 14:13:58.484103	\N	1	\N
18	Portuguesa	PO	t	2015-08-25 14:14:17.704198	\N	1	\N
19	Sucre	SU	t	2015-08-25 14:14:41.639901	\N	1	\N
20	Táchira	TA	t	2015-08-25 14:14:49.813575	\N	1	\N
22	Vargas	VA	t	2015-08-25 14:15:15.582557	\N	1	\N
23	Yaracuy	YA	t	2015-08-25 14:15:31.961235	\N	1	\N
21	Trujillo	TR	t	2015-08-25 14:15:08.982647	\N	1	\N
24	Zulia	ZU	f	2015-08-25 14:15:38.595598	2016-09-01 00:00:00	1	1
\.


--
-- Data for Name: estado_civil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY estado_civil (id_edo_civil, edo_civil, fecha_creacion, usuario_actualizacion, usuario_creacion, status, fecha_actualizacion) FROM stdin;
3	Viudo	2016-08-17	1	1	t	2016-09-07
2	Casado	2016-08-17	1	1	t	2016-09-07
1	Soltero	2016-08-17	1	1	t	2016-09-07
\.


--
-- Name: estado_civil_id_edo_civil_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('estado_civil_id_edo_civil_seq', 3, true);


--
-- Name: estado_id_estado_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('estado_id_estado_seq', 1, false);


--
-- Data for Name: evolucion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY evolucion (id_evaluacion, paciente, motivo_consulta, tension_alta, frecuencia_cardiaca, frecuencia_respiratoria, peso, talla, pulso, circunferencia_cefalica, circunferencia_abdominal, otros_sv, examen_fisico, laboratorio, imageneologia, otros_examenes, impresion_diagnostica, plan_tratamiento, reposo, observacion, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion, status) FROM stdin;
\.


--
-- Name: evolucion_id_evaluacion_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('evolucion_id_evaluacion_seq', 1, true);


--
-- Data for Name: historia_clinica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY historia_clinica (id_historia_clinica, paciente, peso, talla, frecuencia_cardiaca, frecuencia_respiratoria, tension_alta, pulso, circunferencia_cefalica, circunferencia_abdominal, otros, alergico, medicacion, enfermedades, observacion, comentarios, impresion_diagnostica, tratamiento, evolucion, laboratorio, examenes_otros, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion, imageneologia, plan_tratamiento, examen_fisico, motivo_consulta, enfermedad_actual, antecedentes_personales, padre, madre, hermanos, otros_hp, fumar, alcohol, cafe, drogas, m_mejillas, m_labios, m_unas, otros_habitosp, "FRS", "FUR", "PRS", "CICLO", sinusorragia, orgasmos, maridos, infeccion_ur, dispareunia, libido, "AVM", "DIU", "EIP", "ACO", lactancia, puerperio, gestas) FROM stdin;
\.


--
-- Name: historia_clinica_id_historia_clinica_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('historia_clinica_id_historia_clinica_seq', 1, false);


--
-- Name: historia_clinica_maf_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('historia_clinica_maf_seq', 1, false);


--
-- Data for Name: historia_clinica_psicologia; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY historia_clinica_psicologia (id_hc_psicologia, paciente, fecha_ingreso, hora, nombre_padre, nombre_madre, nombre_conyugue, referido, motivo_consulta, enfermedad_actual, antecedentes_familiares, padre, madre, hermanos, otros, antecedentes_personales, tabaco, alcohol, drogas, otros_hp, examen_fisico, tension_alta, frecuencia_cardiaca, frecuencia_respiratoria, talla, peso, pulso, examen_mental, impresion_diagnostica, plan_tratamiento, observacion, comentarios, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion) FROM stdin;
\.


--
-- Name: historia_clinica_psicologia_id_hc_psicologia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('historia_clinica_psicologia_id_hc_psicologia_seq', 1, false);


--
-- Data for Name: historia_clinica_psiquiatrica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY historia_clinica_psiquiatrica (id_hc_psiquiatrica, paciente, fecha_ingreso, hora, nombre_padre, nombre_madre, nombre_conyugue, referido, motivo_consulta, enfermedad_actual, antecedentes_familiares, padre, madre, hermanos, otros, antecedentes_personales, tabaco, alcohol, drogas, otros_hp, examen_fisico, tension_alta, frecuencia_cardiaca, frecuencia_respiratoria, talla, peso, pulso, examen_mental, impresion_diagnostica, plan_tratamiento, observacion, comentarios, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion) FROM stdin;
\.


--
-- Name: historia_clinica_psiquiatrica_id_hc_psiquiatrica_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('historia_clinica_psiquiatrica_id_hc_psiquiatrica_seq', 1, false);


--
-- Data for Name: institucion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY institucion (id_institucion, nombre, rif, direccion, telefono, telefono2, fecha_creacion, usuario_actualizacion, usuario_creacion, status, fecha_actualizacion) FROM stdin;
1	Archivo General de la Nación		Final avenida Panteón	(0212)-000-0000	(0212)-000-0000	2016-08-17 00:00:00	1	1	t	2016-09-05 00:00:00
2	Biblioteca Ayacucho		Av. Urdaneta	(0212)-000-0000	(0212)-000-0000	2016-08-17 00:00:00	1	1	t	2016-09-05 00:00:00
3	Casa de Bello		Esquina de Salas	(0212)-000-0000	(0212)-000-0000	2016-08-17 00:00:00	1	1	t	2016-09-05 00:00:00
\.


--
-- Name: institucion_id_institucion_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('institucion_id_institucion_seq', 3, true);


--
-- Data for Name: medico_horario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY medico_horario (id_medico_horario, medico, dia, hora_entrada, hora_salida, es_activo, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion) FROM stdin;
1	1	2	07:00:00	12:00:00-04:30	t	2016-11-03	1	2016-11-03	\N
2	32	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
3	32	3	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
4	32	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
5	32	5	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
6	32	6	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
7	31	2	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
8	31	3	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
9	31	4	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
10	31	5	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
11	31	6	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
12	30	3	10:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
13	30	6	10:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
14	28	2	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
15	28	3	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
16	28	4	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
17	28	5	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
18	28	6	08:00:00	13:00:00-04	t	2016-11-22	1	2016-11-22	\N
19	29	3	16:00:00	19:00:00-04	t	2016-11-22	1	2016-11-22	\N
20	29	5	16:00:00	19:00:00-04	t	2016-11-22	1	2016-11-22	\N
21	24	2	13:30:00	16:30:00-04	t	2016-11-22	1	2016-11-22	\N
22	24	3	13:30:00	16:30:00-04	t	2016-11-22	1	2016-11-22	\N
23	24	4	13:30:00	16:30:00-04	t	2016-11-22	1	2016-11-22	\N
24	24	5	13:30:00	16:30:00-04	t	2016-11-22	1	2016-11-22	\N
25	24	6	13:30:00	16:30:00-04	t	2016-11-22	1	2016-11-22	\N
26	25	2	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
27	25	3	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
28	25	4	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
29	25	5	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
30	25	6	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
31	26	2	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
32	26	5	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
33	26	6	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
34	27	2	13:30:00	16:30:00-04	t	2016-11-22	1	2016-11-22	\N
35	27	3	13:30:00	16:30:00-04	t	2016-11-22	1	2016-11-22	\N
36	27	4	13:30:00	16:30:00-04	t	2016-11-22	1	2016-11-22	\N
37	23	2	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
38	23	3	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
39	23	4	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
40	23	5	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
41	23	6	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
42	20	5	07:00:00	15:00:00-04	t	2016-11-22	1	2016-11-22	\N
43	18	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
44	18	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
45	18	6	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
46	17	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
47	17	3	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
48	17	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
49	13	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
50	13	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
51	13	6	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
52	14	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
53	14	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
54	14	5	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
55	21	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
56	21	3	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
57	21	5	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
58	19	4	07:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
59	19	6	07:00:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
60	10	6	07:00:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
61	22	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
62	22	3	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
63	22	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
64	22	5	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
65	22	6	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
66	9	2	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
67	9	3	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
68	9	4	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
69	9	5	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
70	9	6	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
71	8	2	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
72	8	3	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
73	8	4	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
74	8	5	07:30:00	12:30:00-04	t	2016-11-22	1	2016-11-22	\N
75	6	2	08:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
76	6	3	08:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
77	6	4	08:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
78	6	5	08:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
79	6	6	08:00:00	00:00:00-04	t	2016-11-22	1	2016-11-22	\N
80	7	2	08:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
81	7	3	08:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
82	7	4	08:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
83	7	5	08:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
84	7	6	08:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
85	15	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
86	15	3	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
87	15	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
88	15	5	00:00:00	00:00:00-04	t	2016-11-22	1	2016-11-22	1
89	15	6	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
90	16	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
91	16	3	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
92	16	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
93	16	5	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
94	16	6	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
95	2	2	07:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
96	2	3	07:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
97	2	4	07:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
98	2	5	07:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
99	2	6	07:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
100	11	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
101	11	3	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
102	11	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
103	11	5	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
104	11	6	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
105	1	3	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
106	1	4	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
107	1	5	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
108	1	6	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
109	5	2	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
110	5	3	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
111	5	4	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
112	5	5	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
113	5	6	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
114	3	2	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
115	3	3	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
116	3	4	19:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
117	3	5	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
118	3	6	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
119	12	2	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
120	12	3	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
121	12	4	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
122	12	5	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
123	12	6	13:00:00	17:00:00-04	t	2016-11-22	1	2016-11-22	\N
124	4	2	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
125	4	3	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
126	4	4	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
127	4	5	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
128	4	6	07:00:00	12:00:00-04	t	2016-11-22	1	2016-11-22	\N
\.


--
-- Name: medico_horario_id_medico_horario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('medico_horario_id_medico_horario_seq', 128, true);


--
-- Data for Name: medicos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY medicos (id_medico, nombres, apellidos, especialidad, telefono_oficina, telefono_celular, correo, status, nro_medico, cant_paciente_dia, foto, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion, sede) FROM stdin;
2	Pablo	Torres	2	(0212)-505-9435	(0416)-901-3443	pablo.torres@bnv.gob.ve	t		15		2016-11-22	1	2016-11-22	\N	1
1	Blanca	Useche	2	(0212)-505-9345	(0414)-170-4970	blanca.useche@bnv.gob.ve	t		15		2016-11-03	1	2016-11-03	\N	1
3	Aron	Blandin	2	(0212)-505-9345	(0000)-000-0000	aron.blandin@bnv.gob.ve	t		15		2016-11-22	1	2016-11-22	\N	1
4	Manuel	Perez	2	(0212)-505-9345	(0000)-000-0000	manuel.perez@bnv.gob.ve	t		15		2016-11-22	1	2016-11-22	\N	1
6	Marlene	Sanchez	1	(0212)-505-9345	(0412)-262-1987	marlene.sanchez@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
5	Imar	Mendez	5	(0212)-505-9345	(0000)-000-0000	imar.mendez@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
7	Ailyn	Pelayo	1	(0212)-505-9345	(0424)-116-2718	aylin.pelayo@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
8	Zaidith	Saavedra	6	(0212)-505-9345	(0426)-218-0900	zaidith.saavedra@bnv.gob.ve	t		12		2016-11-22	1	2016-11-22	\N	1
9	Madeline	Palma	6	(0212)-505-9345	(0414)-263-8113	madeline.palma@bnv.gob.ve	t		12		2016-11-22	1	2016-11-22	\N	1
10	Yulienys	González	7	(0212)-505-9345	(0000)-000-0000	info@info.com	t		7		2016-11-22	1	2016-11-22	\N	1
11	Maria Nelia	Mendez	2	(0212)-505-9345	(0416)-837-6439	marianelia.mendez@bnv.gob.ve	t		15		2016-11-22	1	2016-11-22	\N	1
12	Ingrid	González	9	(0212)-505-9345	(0000)-000-0000	ingrid.gonzalez@bnv.gob.ve	t		15		2016-11-22	1	2016-11-22	\N	1
14	Tatania	Dávila	5	(0212)-505-9345	(0414)-325-6062	tatania.davila@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
15	Rosa	López	1	(0212)-505-9345	(0414)-922-4520	info@info.com	t		7		2016-11-22	1	2016-11-22	\N	1
16	Susana	Bobay	1	(0212)-505-9345	(0412)-294-7444	susana.bobay@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
17	Lottis	Bohorquez	8	(0212)-505-9345	(0426)-520-1550	lottis.bohorquez@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
18	Cecilia	Dávila	3	(0212)-505-9345	(0426)-902-4288	cecilia.davila@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
19	Giosue	Saturno	10	(0212)-505-9345	(0000)-000-0000	giouse.saturno@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
20	Carmen	Marquez	11	(0212)-505-9345	(0000)-000-0000	carmen.marquez@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
21	Graciela	Angarita	12	(0212)-505-9345	(0000)-000-0000	graciela.angarita@bnv.gob.ve	t		7		2016-11-22	1	2016-11-22	\N	1
22	Hector	Sosa	6	(0212)-505-9345	(0416)-411-3697	hector.sosa@bnv.gob.ve	t		12		2016-11-22	1	2016-11-22	\N	1
13	Orlando	Rodriguez	4	(0212)-505-9345	(0416)-707-4987	orlando.rodriguez@bnv.gob.ve	t		15		2016-11-22	1	2016-11-22	\N	1
23	Henry	Cortes	13	(0000)-000-0000	(0416)-239-0981	info@info.com	t		15		2016-11-22	1	2016-11-22	\N	2
31	Edwin	Ohep	18	(0000)-000-0000	(0000)-000-0000	info@info.com	t		7		2016-11-22	1	2016-11-22	\N	4
32	Carmen	Sumosa	18	(0000)-000-0000	(0000)-000-0000	info@info.com	t		7		2016-11-22	1	2016-11-22	\N	4
30	Jesús	Cedré	19	(0000)-000-0000	(0000)-000-0000	info@info.com	t		7		2016-11-22	1	2016-11-22	\N	4
29	Milena	López	17	(0000)-000-0000	(0000)-000-0000	info@info.com	t		15		2016-11-22	1	2016-11-22	\N	4
28	Arquimedes	Marquez	17	(0000)-000-0000	(0000)-000-0000	info@info.com	t		15		2016-11-22	1	2016-11-22	\N	4
27	Mariela	Guadarrama	16	(0000)-000-0000	(0000)-000-0000	info@info.com	t		7		2016-11-22	1	2016-11-22	\N	3
26	Maria	Cauto	15	(0000)-000-0000	(0000)-000-0000	info@info.com	t		7		2016-11-22	1	2016-11-22	\N	3
25	Deisa	Griman	14	(0000)-000-0000	(0000)-000-0000	info@info.com	t		15		2016-11-22	1	2016-11-22	\N	3
24	Carolina	Izquierdo	14	(0000)-000-0000	(0000)-000-0000	info@info.com	t		15		2016-11-22	1	2016-11-22	\N	3
\.


--
-- Name: medicos_id_medico_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('medicos_id_medico_seq', 32, true);


--
-- Data for Name: municipio; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY municipio (id_municipio, estado, nombre, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion) FROM stdin;
\.


--
-- Name: municipio_id_municipio_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('municipio_id_municipio_seq', 1, false);


--
-- Data for Name: paciente; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY paciente (id_paciente, cedula, numero_historia, nombre, apellido, fecha_nacimiento, sexo, estado_civil, tipo_persona, tipo_trabajador, institucion, departamento, ocupacion, cedula_representante, nombre_representante, parentesco, fk_estado, direccion, lugar_nacimiento, telefono_celular, telefono_oficina, telefono_fijo, correo, foto, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion, nacionalidad, correo_sec) FROM stdin;
5	16027739		Lenin	Hernandez	1983-08-27 00:00:00	M	1	1	1	1	Oficina de Tecnología de la Información	Bachiller I			\N	10	El paraiso	Caracas	(0426)-902-8389	(0212)-454-5454	(0212)-541-6454	leninmhs@gmail.com		t	2016-09-08 10:10:41.220202	2016-09-08 10:10:41.220202	1	\N	V	
7	16027739	\N	Liseth	Delgado	2016-09-21 00:00:00	F	3	2	1	1	Oficina de Tecnología de la Información	Bachiller I			\N	2	Av. las fuentes del paraiso	Bocono. Estado Trujillo	(0212)-121-2121		(0426)-656-5656	leninmhs@gmail.com	\N	t	2016-09-08 13:17:45.590665	2016-09-08 13:17:45.590665	\N	\N	V	
8	19186999	\N	Liseth	Delgado	2016-09-15 00:00:00	M	1	2	2	1	Oficina de Tecnología de la Información	Bachiller I			\N	4	Av. las fuentes del paraiso	Bocono. Estado Trujillo	(0212)-121-2121			leninmhs@gmail.com	Captura de pantalla de 2016-06-22 09:53:57.png	t	2016-09-08 13:23:31.462276	2016-09-08 13:23:31.462276	\N	\N	V	
6	19186998	19186999	Liseth	Delgado	2016-09-28 00:00:00	F	1	1	2	1	Oficina de Tecnología de la Información	Bachiller I			\N	2	Av. las fuentes del paraiso	Bocono. Estado Trujillo	(3245)-345-4352			leninmhs@gmail.com	\N	t	2016-09-08 10:23:47.350604	2016-09-08 10:23:47.350604	1	\N	V	
\.


--
-- Name: paciente_id_paciente_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('paciente_id_paciente_seq', 8, true);


--
-- Data for Name: parentesco; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY parentesco (id_parentesco, parentesco, fecha_creacion, usuario_actualizacion, usuario_creacion, status, fecha_actualizacion) FROM stdin;
4	Abuelo	2016-08-17	1	1	t	2016-09-01
3	Hijo	2016-08-17	1	1	t	2016-09-07
2	Madre	2016-08-17	1	1	t	2016-09-07
1	Padre	2016-08-17	1	1	t	2016-09-07
\.


--
-- Name: parentesco_id_parentesco_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('parentesco_id_parentesco_seq', 4, true);


--
-- Data for Name: parroquia; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY parroquia (id_parroquia, municipio, nombre, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion) FROM stdin;
\.


--
-- Name: parroquia_id_parroquia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('parroquia_id_parroquia_seq', 1, false);


--
-- Data for Name: patologias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY patologias (id_tipo_patologia, patologia, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion, status) FROM stdin;
1	Enfermedades respiratorias	2016-09-02	1	2016-09-05	1	t
\.


--
-- Name: patologias_id_tipo_patologia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('patologias_id_tipo_patologia_seq', 1, true);


--
-- Data for Name: reposo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY reposo (id_reposo, paciente, tiempo_reposo, medida_reposo, observacion, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion) FROM stdin;
\.


--
-- Name: reposo_id_reposo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('reposo_id_reposo_seq', 1, false);


--
-- Data for Name: sede; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY sede (id_sede, sede, direccion, estado, foto_sede, horario_entrada, horario_salida, contacto, correo_sede, nombre_responsable, cedula_responsable, es_activo, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion, telefono_1, telefono_2, telefono_3) FROM stdin;
1	Servicio Médico "Lic. Pedro Torres"	Final avenida Panteón, edificio Sede Administrativa Biblioteca Nacional, Complejo Cultural Foro Libertador. Parroquia Altagracia	10	bn.jpg	7:00 AM	4:00 PM	04142368578	servicio.medico@bnv.gob.ve	Pablo Torres	5523612	t	2016-09-13 05:04:25.298516	2016-09-13 00:00:00	1	1	(0212)-505-9345		
2	Servicio Médico "Las Torres"	Avenida Baralt	10	bn.jpg	6:00 AM	5:00 PM	0212-5050000	casa.artista@gmail.com	Juan Perez	\N	t	2016-09-14 04:08:11.304085	2016-09-14 00:00:00	1	1	(0212)-000-0000		
3	Servicio Médico "De Los Artistas"	Bulevar Amador Bendayán, Edificio Fundación Casa del Artista. Piso 2 Quebrada Honda	10	bn.jpg	7:00 AM	5:00 PM	pablo.torres@bnv.gob.ve	contacto@contacto.com	Dr. Pablo Torres	\N	t	2016-11-07 11:00:48.403011	2016-11-07 11:00:48.403011	1	\N	(0212)-576-1403		
4	Teatro Teresa Carreño	Final Av. Paseo Colon. Complejo Cultural Teatro Teresa Carreno	10	bn.jpg	7:00 AM	5:00 PM	pablo.torres@bnv.gob.ve	info@teatroteresacarreno.gob.ve	Dr. Pablo Torres	\N	t	2016-11-07 11:16:35.770259	2016-11-07 11:16:35.770259	1	\N	(0212)-574-9122		
5	Imprenta de la Cultura	Guarenas	15		8:00 AM	1:00 PM	pablo.torres@bnv.gob.ve	contacto@contacto.com	Dr. Pablo Torres	\N	t	2016-11-07 11:25:22.624545	2016-11-22 00:00:00	1	1	(0212)-365-0270		
\.


--
-- Data for Name: sede_foto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY sede_foto (id_sede_foto, fk_sede, foto, descripcion_foto, es_activo, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion) FROM stdin;
\.


--
-- Name: sede_foto_id_sede_foto_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('sede_foto_id_sede_foto_seq', 1, false);


--
-- Name: sede_id_sede_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('sede_id_sede_seq', 5, true);


--
-- Data for Name: solicitud; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY solicitud (id_solicitud, fk_paciente, fk_sede, fk_especialidad, fecha_solicitud, hora, motivo_consulta, medico_referido, fecha_creacion, usuario_creacion, es_activo, fk_medico) FROM stdin;
\.


--
-- Name: solicitud_id_solicitud_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('solicitud_id_solicitud_seq', 1, false);


--
-- Data for Name: tipo_persona; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_persona (id_tipo_persona, tipo_persona, fecha_creacion, usuario_actualizacion, usuario_creacion, status, fecha_actualizacion) FROM stdin;
1	Titular	2016-08-17	\N	1	t	2016-08-17
2	Beneficiario	2016-08-17	1	1	t	2016-09-01
3	Beneficiario menor	2016-09-12	1	1	t	2016-09-12
\.


--
-- Name: tipo_persona_id_tipo_persona_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipo_persona_id_tipo_persona_seq', 3, true);


--
-- Data for Name: tipo_trabajador; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_trabajador (id_tipo_trabajador, tipo_trabajador, fecha_creacion, usuario_actualizacion, usuario_creacion, status, fecha_actualizacion) FROM stdin;
1	Contratado	2016-08-17	\N	1	t	2016-08-17
2	Fijo	2016-08-17	1	1	t	2016-09-01
\.


--
-- Name: tipo_trabajador_id_tipo_trabajador_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipo_trabajador_id_tipo_trabajador_seq', 2, true);


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario (id_usuario, usuario, clave, nombre, apellido, telefono_oficina, telefono_celular, correo, estatus, perfil, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion) FROM stdin;
1	leninmhs	e10adc3949ba59abbe56e057f20f883e	Lenin	Hernandez	\N	04269028389	leninmhs@gmail.com	t	Admin	2016-08-17 08:17:50.37125	2016-08-17 08:17:50.37125	\N	\N
\.


--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuario_id_usuario_seq', 1, true);


--
-- Name: id_medico_horario; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY medico_horario
    ADD CONSTRAINT id_medico_horario PRIMARY KEY (id_medico_horario);


--
-- Name: id_solicitud; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT id_solicitud PRIMARY KEY (id_solicitud);


--
-- Name: nombre; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT nombre UNIQUE (nombre);


--
-- Name: pk_dia; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dias
    ADD CONSTRAINT pk_dia PRIMARY KEY (id_dia);


--
-- Name: pk_especialidad; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY especialidad
    ADD CONSTRAINT pk_especialidad PRIMARY KEY (id_especialidad);


--
-- Name: pk_estado; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT pk_estado PRIMARY KEY (id_estado);


--
-- Name: pk_estado_civil; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY estado_civil
    ADD CONSTRAINT pk_estado_civil PRIMARY KEY (id_edo_civil);


--
-- Name: pk_historia_clinica; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY historia_clinica
    ADD CONSTRAINT pk_historia_clinica PRIMARY KEY (id_historia_clinica);


--
-- Name: pk_historia_clinica_psicologia; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY historia_clinica_psicologia
    ADD CONSTRAINT pk_historia_clinica_psicologia PRIMARY KEY (id_hc_psicologia);


--
-- Name: pk_historia_clinica_psiquiatrica; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY historia_clinica_psiquiatrica
    ADD CONSTRAINT pk_historia_clinica_psiquiatrica PRIMARY KEY (id_hc_psiquiatrica);


--
-- Name: pk_id_actividad; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT pk_id_actividad PRIMARY KEY (id_actividad);


--
-- Name: pk_id_evaluacion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY evolucion
    ADD CONSTRAINT pk_id_evaluacion PRIMARY KEY (id_evaluacion);


--
-- Name: pk_institucion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY institucion
    ADD CONSTRAINT pk_institucion PRIMARY KEY (id_institucion);


--
-- Name: pk_medico; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY medicos
    ADD CONSTRAINT pk_medico PRIMARY KEY (id_medico);


--
-- Name: pk_municipio; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY municipio
    ADD CONSTRAINT pk_municipio PRIMARY KEY (id_municipio);


--
-- Name: pk_paciente; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY paciente
    ADD CONSTRAINT pk_paciente PRIMARY KEY (id_paciente);


--
-- Name: pk_parentesco; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY parentesco
    ADD CONSTRAINT pk_parentesco PRIMARY KEY (id_parentesco);


--
-- Name: pk_parroquia; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY parroquia
    ADD CONSTRAINT pk_parroquia PRIMARY KEY (id_parroquia);


--
-- Name: pk_reposo; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY reposo
    ADD CONSTRAINT pk_reposo PRIMARY KEY (id_reposo);


--
-- Name: pk_sede; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY sede
    ADD CONSTRAINT pk_sede PRIMARY KEY (id_sede);


--
-- Name: pk_sede_foto; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY sede_foto
    ADD CONSTRAINT pk_sede_foto PRIMARY KEY (id_sede_foto);


--
-- Name: pk_tipo_patologia; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY patologias
    ADD CONSTRAINT pk_tipo_patologia PRIMARY KEY (id_tipo_patologia);


--
-- Name: pk_tipo_persona; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_persona
    ADD CONSTRAINT pk_tipo_persona PRIMARY KEY (id_tipo_persona);


--
-- Name: pk_tipo_trabajador; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_trabajador
    ADD CONSTRAINT pk_tipo_trabajador PRIMARY KEY (id_tipo_trabajador);


--
-- Name: pk_usuario; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk_usuario PRIMARY KEY (id_usuario);


--
-- Name: siglas; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT siglas UNIQUE (siglas);


--
-- Name: fk_dia; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medico_horario
    ADD CONSTRAINT fk_dia FOREIGN KEY (dia) REFERENCES dias(id_dia);


--
-- Name: fk_edo_civil; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paciente
    ADD CONSTRAINT fk_edo_civil FOREIGN KEY (estado_civil) REFERENCES estado_civil(id_edo_civil);


--
-- Name: fk_especialidad; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medicos
    ADD CONSTRAINT fk_especialidad FOREIGN KEY (especialidad) REFERENCES especialidad(id_especialidad) MATCH FULL;


--
-- Name: fk_especialidad; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT fk_especialidad FOREIGN KEY (fk_especialidad) REFERENCES especialidad(id_especialidad);


--
-- Name: fk_estado; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paciente
    ADD CONSTRAINT fk_estado FOREIGN KEY (fk_estado) REFERENCES estado(id_estado);


--
-- Name: fk_estado; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sede
    ADD CONSTRAINT fk_estado FOREIGN KEY (estado) REFERENCES estado(id_estado);


--
-- Name: fk_institucion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paciente
    ADD CONSTRAINT fk_institucion FOREIGN KEY (institucion) REFERENCES institucion(id_institucion);


--
-- Name: fk_medico; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT fk_medico FOREIGN KEY (fk_medico) REFERENCES medicos(id_medico) MATCH FULL;


--
-- Name: fk_medico_horario; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medico_horario
    ADD CONSTRAINT fk_medico_horario FOREIGN KEY (medico) REFERENCES medicos(id_medico);


--
-- Name: fk_paciente; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reposo
    ADD CONSTRAINT fk_paciente FOREIGN KEY (paciente) REFERENCES paciente(id_paciente);


--
-- Name: fk_paciente; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historia_clinica
    ADD CONSTRAINT fk_paciente FOREIGN KEY (paciente) REFERENCES paciente(id_paciente);


--
-- Name: fk_paciente; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evolucion
    ADD CONSTRAINT fk_paciente FOREIGN KEY (paciente) REFERENCES paciente(id_paciente);


--
-- Name: fk_paciente; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT fk_paciente FOREIGN KEY (fk_paciente) REFERENCES paciente(id_paciente);


--
-- Name: fk_paciente; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historia_clinica_psiquiatrica
    ADD CONSTRAINT fk_paciente FOREIGN KEY (paciente) REFERENCES paciente(id_paciente);


--
-- Name: fk_paciente; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historia_clinica_psicologia
    ADD CONSTRAINT fk_paciente FOREIGN KEY (paciente) REFERENCES paciente(id_paciente);


--
-- Name: fk_parentesco; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paciente
    ADD CONSTRAINT fk_parentesco FOREIGN KEY (parentesco) REFERENCES parentesco(id_parentesco);


--
-- Name: fk_sede; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sede_foto
    ADD CONSTRAINT fk_sede FOREIGN KEY (fk_sede) REFERENCES sede(id_sede);


--
-- Name: fk_sede; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY especialidad
    ADD CONSTRAINT fk_sede FOREIGN KEY (sede) REFERENCES sede(id_sede);


--
-- Name: fk_sede; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY solicitud
    ADD CONSTRAINT fk_sede FOREIGN KEY (fk_sede) REFERENCES sede(id_sede);


--
-- Name: fk_sede; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT fk_sede FOREIGN KEY (fk_sede) REFERENCES sede(id_sede);


--
-- Name: fk_sede; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medicos
    ADD CONSTRAINT fk_sede FOREIGN KEY (sede) REFERENCES sede(id_sede) MATCH FULL;


--
-- Name: fk_tipo_persona; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paciente
    ADD CONSTRAINT fk_tipo_persona FOREIGN KEY (tipo_persona) REFERENCES tipo_persona(id_tipo_persona);


--
-- Name: fk_tipo_trabajador; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paciente
    ADD CONSTRAINT fk_tipo_trabajador FOREIGN KEY (tipo_trabajador) REFERENCES tipo_trabajador(id_tipo_trabajador);


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (fk_usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY institucion
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_persona
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_trabajador
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY parentesco
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paciente
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (fk_usuario_actualizacion) REFERENCES usuario(id_usuario);


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estado_civil
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (fk_usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY municipio
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (fk_usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY parroquia
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (fk_usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY patologias
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evolucion
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sede
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (fk_usuario_actualizacion) REFERENCES usuario(id_usuario);


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sede_foto
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (fk_usuario_actualizacion) REFERENCES usuario(id_usuario);


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dias
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medicos
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medico_horario
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_actualizacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY especialidad
    ADD CONSTRAINT fk_usuario_actualizacion FOREIGN KEY (usuario_actualizacion) REFERENCES usuario(id_usuario);


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (fk_usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY institucion
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_persona
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_trabajador
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY parentesco
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paciente
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (fk_usuario_creacion) REFERENCES usuario(id_usuario);


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estado_civil
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (fk_usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY municipio
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (fk_usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY parroquia
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (fk_usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY patologias
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evolucion
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sede
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (fk_usuario_creacion) REFERENCES usuario(id_usuario);


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sede_foto
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (fk_usuario_creacion) REFERENCES usuario(id_usuario);


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dias
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medicos
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY medico_horario
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario) MATCH FULL;


--
-- Name: fk_usuario_creacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY especialidad
    ADD CONSTRAINT fk_usuario_creacion FOREIGN KEY (usuario_creacion) REFERENCES usuario(id_usuario);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

