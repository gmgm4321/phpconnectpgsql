--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: testtable; Type: TABLE; Schema: public; Owner: Yuki; Tablespace: 
--

CREATE TABLE testtable (
    id integer NOT NULL,
    name character(6) NOT NULL,
    gender character(2) NOT NULL,
    edubg character(16) NOT NULL,
    birthday date NOT NULL
);


ALTER TABLE public.testtable OWNER TO "Yuki";

--
-- Data for Name: testtable; Type: TABLE DATA; Schema: public; Owner: Yuki
--

INSERT INTO testtable VALUES (1, '陳昶吉   ', '男 ', '嘉南藥理科技大學        ', '1992-09-13');
INSERT INTO testtable VALUES (2, '你     ', '男 ', '富               ', '1992-08-01');
INSERT INTO testtable VALUES (3, '在     ', '男 ', '堡               ', '1992-08-01');
INSERT INTO testtable VALUES (4, '大     ', '男 ', '車               ', '1992-08-01');
INSERT INTO testtable VALUES (5, '聲     ', '男 ', '業               ', '1992-08-01');
INSERT INTO testtable VALUES (6, '什     ', '女 ', '八               ', '1992-08-01');
INSERT INTO testtable VALUES (7, '麼     ', '女 ', '萬               ', '1992-08-01');
INSERT INTO testtable VALUES (8, '啦     ', '女 ', '一               ', '1992-08-01');


--
-- Name: testtable_pkey; Type: CONSTRAINT; Schema: public; Owner: Yuki; Tablespace: 
--

ALTER TABLE ONLY testtable
    ADD CONSTRAINT testtable_pkey PRIMARY KEY (id);


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

