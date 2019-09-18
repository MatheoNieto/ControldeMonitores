<center>
    <h2>Información del monitor</h2>
</center>
<br>
<form class="form-horizontal" id="resgitrarmonitor" method="post" action="<?php echo base_url(); ?>mregistramonitor/registrarmonitor" autocomplete="off">
    <fieldset>

        <div class="form-group">
            <div class="col-md-4">
                <label for="txtnombre">Codigo:</label>
                <input id="txtcodigo2" name="txtcodigo2" placeholder="Soto Perez Pepito" class="form-control" required="" type="text" value="<?php foreach($usuarioc as $duser){ echo $duser->codigo; } ?>">

            </div>
            <div class="col-md-4">
                <label for="txtnombre">Nombres:</label>
                <input id="txtnombre" name="txtnombre" placeholder="Pepito Andrés" class="form-control" required="" type="text" value="<?php foreach($usuarioc as $duser){ $variable = $duser->nombresapellidos; $nombres = explode(" ",$variable); for ($i = 2;$i<count($nombres);$i++){echo $nombres[$i]." "; }
                } ?>">
            </div>

            <div class="col-md-4">
                <label for="txtapellidos">Apellidos:</label>
                <input id="txtapellidos" name="txtapellidos" placeholder="Soto Perez" class="form-control" required="" type="text" value="<?php foreach($usuarioc as $duser){$variable = $duser->nombresapellidos;  $nombres = explode(" ",$variable); for ($i = 0;$i<2;$i++){ echo $nombres[$i]." ";}
                } ?>">
            </div>
        </div>


        <!-- Contact Info-->
        <div class="form-group">

            <div class="col-md-4">
                <label for="txttelefono">Numero de telefono:</label>
                <input id="txttelefono" name="txttelefono" placeholder="328814892" class="form-control" required="" type="text" value="<?php foreach($usuarioc as $duser){ echo $duser->telefono; } ?>">

            </div>
            <div class="col-md-4">
                <label for="">Correo:</label>
                <input id="txtemail" name="txtemail" placeholder="pepito.perez@ucp.edu.co" class="form-control" required="" type="email" value="<?php foreach($usuarioc as $duser){ echo $duser->correo; } ?>">

            </div>
            <div class="col-md-4">
                <label for="">Usuario:</label>
                <input id="txtusario" name="txtusuario" placeholder="CarlosH" class="form-control" required="" type="text" value="<?php foreach($usuarioc as $duser){ echo $duser->correo; } ?>">

            </div>
        </div>
        <div class="form-group">

            <div class="col-md-4">
                <label for="txttelefono">Dirección:</label>
                <input id="txtdirec" name="txtdirec" placeholder="Mz 5 Cs 1" class="form-control" required="" type="text" value="<?php foreach($usuarioc as $duser){ echo $duser->dirrecion; } ?>">

            </div>
            <div class="col-md-4">
                <label for="">Barrio:</label>
                <input id="txtbarrio" name="txtbarrio" placeholder="Campestre" class="form-control" required="" type="text" value="<?php foreach($usuarioc as $duser){ echo $duser->barrio; } ?>">

            </div>
            <div class="col-md-4">
                <label for="">Ciudad:</label>
                <input id="txtciudad" name="txtciudad" placeholder="Dosquebradas" class="form-control" required="" type="text" value="<?php foreach($usuarioc as $duser){ echo $duser->ciudad; } ?>">
            </div>
        </div>


        <div class="form-group">

            <div class="col-md-4">
                <label for="">Tipo monitor :</label>
                <select class="form-control" name="txttopm" id="txttopm" title="Monitor-Practicante">
                    <?php foreach($tipomoni as $tpo){ echo '<option value="'.$tpo->id.'">'.$tpo->nombre.'</option>'; } ?>
                </select>
            </div>

            <div class="col-md-4">
                <label for="">Carrera:</label>
                <select class="form-control" name="txtcarrera" id="txtcarrera">                    
                    <?php foreach($programas as $prgns){ echo '<option value="'.$prgns->id.'">'.$prgns->nombre.'</option>'; } ?>

                </select>

            </div>
            <div class="col-md-4">
                <label for="">Semestre actual :</label>
                <select class="form-control" name="txtsemestre" id="txtsemestre">
                    <optgroup label="Universitarios">
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <option>V</option>
                        <option>VI</option>
                        <option>VII</option>
                        <option>VIII</option>
                        <option>IX</option>
                        <option>X</option>

                    </optgroup>
                    <optgroup label="Practicantes">
                        <option>Grado 10</option>
                        <option>Grado 11</option>
                    </optgroup>
                </select>
            </div>

        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label for="">Dependencia del monitor:</label>
                <select class="form-control" name="txtdependencia" id="txtdependencia" title="Procesos,GTI,Humanas">
                    <?php foreach($dependencias as $depen){ echo '<option value="'.$depen->id.'">'.$depen->nombre.'</option>'; } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="">Fortalezas academicas:</label>


                <!-------------------------------------------------------------
                   INICIO  SELECT DE FORTALEZAS ACADEMICAS
-------------------------------------------------------------->
                <input type="text" class="form-control" id="materiasb" name="materiasb" style="display:none;">
                <select class="selectpicker" multiple title="Seleccione las areas academicas..." data-live-search="true" data-selected-text-format="count > 5" id="areasfortaleza" required="Seleciona el area">
                    <option>Ninguna</option>
                    <option>Administración de la producción</option>
                    <option>Administración financiera</option>
                    <option>Administración y empresarismo</option>
                    <option>Administración de recursos de empresas agroindustriales</option>
                    <option>Álgebra lineal</option>
                    <option>Análisis de precios en mercadeo</option>
                    <option>Análisis financiero</option>
                    <option>Analisis proyectual I</option>
                    <option>Analisis Proyectual II</option>
                    <option>Análisis y diseño de circuitos</option>
                    <option>Análisis y presentación de informes</option>
                    <option>Anteproyecto (CSP)</option>
                    <option>Anteproyecto (IST)</option>
                    <option>Anteproyecto (LER)</option>
                    <option>Anteproyecto (Mercadeo)</option>
                    <option>Anteproyecto de grado (NI)</option>
                    <option>Antropología</option>
                    <option>Antropología cultural</option>
                    <option>Antropología económica/cultural</option>
                    <option>Antropología filosófica</option>
                    <option>Antropología teológica</option>
                    <option>Base de datos I</option>
                    <option>Base de datos II</option>
                    <option>Cálculo I</option>
                    <option>Cálculo II</option>
                    <option>campaña publicitaria</option>
                    <option>Canales de distribución y logistica</option>
                    <option>Cátedra CEINFI</option>
                    <option>Catequesis</option>
                    <option>Cerámica</option>
                    <option>Ciencia y tecnología</option>
                    <option>Cognitiva I</option>
                    <option>Cognitiva II</option>
                    <option>Comportamental I</option>
                    <option>Comportamental II</option>
                    <option>Comportamiento del consumidor</option>
                    <option>Comunicación corporativa</option>
                    <option>Comunicación del gobierno y tercer sector</option>
                    <option>Comunicación en mercadeo</option>
                    <option>Comunicación en mercadeo y plan de medios</option>
                    <option>Comunicación organizacional</option>
                    <option>Conceptos fundamentales de sociología</option>
                    <option>Congnitivo Conductual</option>
                    <option>Contabilidad de costos</option>
                    <option>Contabilidad Financiera</option>
                    <option>Contabilidad financiera y de costos</option>
                    <option>Contabilidad general</option>
                    <option>Contexto económico del mercado</option>
                    <option>Contextos comunicativos</option>
                    <option>Control de calidad</option>
                    <option>Cooperación internacional</option>
                    <option>Creación de empresas</option>
                    <option>Cristología</option>
                    <option>Crónica</option>
                    <option>Culturas mediáticas</option>
                    <option>Curriculo</option>
                    <option>Democracias y ciudadanía</option>
                    <option>Deportes</option>
                    <option>Derecho empresarial</option>
                    <option>Derecho internacional</option>
                    <option>Desarrollo de software I</option>
                    <option>Desarrollo de software II</option>
                    <option>Desarrollo de software III</option>
                    <option>Desarrollo moral</option>
                    <option>Desarrollo Organizacional</option>
                    <option>Desarrollo y lanzamiento de producto</option>
                    <option>Dialogo fe y cultura</option>
                    <option>Dialogo fe y razón</option>
                    <option>Dibujo asistido por computador</option>
                    <option>Didáctica de la educación religiosa escolar</option>
                    <option>Dirección Estrategíca</option>
                    <option>Direccionamiento estratégico</option>
                    <option>Diseño de bases de datos I</option>
                    <option>Diseño publicitario y producción audiovisual</option>
                    <option>Diseños, técnica e instrumentos</option>
                    <option>Distribución y logística</option>
                    <option>Drecho empresarial</option>
                    <option>Eclesiología</option>
                    <option>Economía Internacional I</option>
                    <option>Economía internacional II</option>
                    <option>Ecuaciones diferenciales</option>
                    <option>Edición gráfica</option>
                    <option>Electiva Fase teórica (Psicología)</option>
                    <option>Electiva I (AE)</option>
                    <option>Electiva I (Arqui)</option>
                    <option>Electiva I (CSP)</option>
                    <option>Electiva I (Diseño)</option>
                    <option>Electiva I (ID)</option>
                    <option>Electiva I (IST)</option>
                    <option>Electiva I (LER)</option>
                    <option>Electiva I (Mercadeo)</option>
                    <option>Electiva I (NI)</option>
                    <option>Electiva I (Psicología)</option>
                    <option>Electiva I (T.M)</option>
                    <option>Electiva I (TDS)</option>
                    <option>Electiva I (TGEA)</option>
                    <option>Eleciva II (AE)</option>
                    <option>Electiva II (Arqui)</option>
                    <option>Electiva II (CSP)</option>
                    <option>Electiva II (Diseño)</option>
                    <option>Electiva II (ID)</option>
                    <option>Electiva II (IST)</option>
                    <option>Electiva II (LER)</option>
                    <option>Electiva II (Mercadeo)</option>
                    <option>Electiva II (NI)</option>
                    <option>Electiva II (TDS)</option>
                    <option>Electiva III (AE)</option>
                    <option>Electiva III (Arqui)</option>
                    <option>Electiva III (CSP)</option>
                    <option>Electiva III (Diseño)</option>
                    <option>Electiva III (IST)</option>
                    <option>Electiva III (Mercadeo)</option>
                    <option>Electiva III (NI)</option>
                    <option>Electiva III (Psicología)</option>
                    <option>Electiva III(TDS)</option>
                    <option>Electiva IV (AE)</option>
                    <option>Electiva IV (Arqui)</option>
                    <option>Electiva IV (Diseño)</option>
                    <option>Electiva IV (IST)</option>
                    <option>Electiva IV (Mercadeo)</option>
                    <option>Electiva IV (NI)</option>
                    <option>Electiva IV (Psicología)</option>
                    <option>Electiva V (Diseño)</option>
                    <option>Electiva V (IST)</option>
                    <option>Electiva V (Psicología)</option>
                    <option>Electronica</option>
                    <option>Electrotecnia</option>
                    <option>Emprendimiento</option>
                    <option>Epistemología de la administración</option>
                    <option>Epistemologia de la investigacion</option>
                    <option>Epistemología de la investigación educativa</option>
                    <option>Epístolas paulinas</option>
                    <option>Escatología</option>
                    <option>Escritos joánicos y cartas católicas</option>
                    <option>Estadistica I</option>
                    <option>Estadistica II</option>
                    <option>Estadistica II</option>
                    <option>Estrategías de negociación internacional</option>
                    <option>Ética</option>
                    <option>Ética Profesional</option>
                    <option>Evaluación de proyectos</option>
                    <option>Evangelios sinópticos</option>
                    <option>Expresión I</option>
                    <option>Expresión II</option>
                    <option>Expresión IV</option>
                    <option>Expresión oral</option>
                    <option>Expresión oral y escrita I</option>
                    <option>Expresión oral y escrita II</option>
                    <option>Expresión V</option>
                    <option>Expresión VI</option>
                    <option>Expresión VII</option>
                    <option>Factor humano I</option>
                    <option>Factor humano II</option>
                    <option>Filosofía del lenguaje</option>
                    <option>Fisica I</option>
                    <option>Fisica II</option>
                    <option>Fisica III</option>
                    <option>Formación ciudadana</option>
                    <option>Formulación de proyectos</option>
                    <option>Formulación y evaluación de proyectos</option>
                    <option>Fotografía</option>
                    <option>Funcionamiento de la organización</option>
                    <option>Fundamentos biológicos</option>
                    <option>Fundamentos contables y financieros</option>
                    <option>Fundamentos de administración</option>
                    <option>Fundamentos de Economía</option>
                    <option>Fundamentos de Investigación</option>
                    <option>Fundamentos de mercadeo</option>
                    <option>Fundamentos de negocios internacionales</option>
                    <option>Fundamentos de química</option>
                    <option>Fundamentos históricos y epistemológicos de los sistemas psicológicos</option>
                    <option>Fundamentos históricos y epistemológicos de los sistemas psicológicos II</option>
                    <option>Fundamentos matemáticos</option>
                    <option>Geopolitica</option>
                    <option>Gerencia del servicio y mercadeo relacional</option>
                    <option>Gerencia estratégica de ventas</option>
                    <option>Gestión ambiental</option>
                    <option>Gestión comercial</option>
                    <option>Gestión de ka comunicación</option>
                    <option>Gestión de proveedores</option>
                    <option>Gestión de talento Humano</option>
                    <option>Gestión de tecnología</option>
                    <option>Gestion I</option>
                    <option>Gestion II</option>
                    <option>Gestion III</option>
                    <option>Gestion IV</option>
                    <option>Hermeneútica de la Fe </option>
                    <option>Historia de la iglesia</option>
                    <option>Historia de la salvación</option>
                    <option>Historia nacional y regional</option>
                    <option>Historia social de la comunicación</option>
                    <option>Historia sociopolítica</option>
                    <option>Historia y teoría Administrativa</option>
                    <option>Historia y teoría de la Organización </option>
                    <option>Impacto ambiental de las empresas agroindustriales</option>
                    <option>Industrias culturales</option>
                    <option>Informática aplicada</option>
                    <option>Informatica básica</option>
                    <option>Informática educativa</option>
                    <option>Informatica I</option>
                    <option>Informatica II</option>
                    <option>Informe final (CSP)</option>
                    <option>Informe Final (ID)</option>
                    <option>Informe final (IST)</option>
                    <option>Informe final (NI)</option>
                    <option>Ingeniería de métodos</option>
                    <option>Ingeniería del software I</option>
                    <option>Ingeniería del software II</option>
                    <option>Ingeniería Económica</option>
                    <option>Introducción a la ingeniería de sistemas y telecomunicaciones</option>
                    <option>Introducción a la ingeniería Industrial</option>
                    <option>Introducción a la tecnología </option>
                    <option>Introducción a las Ciencias Sociales</option>
                    <option>Introducción a los estudios bíblicos</option>
                    <option>Introducción al hardware</option>
                    <option>Introducción alas ciencias de la educación </option>
                    <option>Investigación de mercados</option>
                    <option>Investigación de operaciones I</option>
                    <option>Investigación de operaciones II</option>
                    <option>Investigación en tecnología</option>
                    <option>Investigación I</option>
                    <option>Investigación II</option>
                    <option>Labarotario de medios</option>
                    <option>Legislación</option>
                    <option>Legislación laboral y comercial</option>
                    <option>Legislación laboral, comercial y tributaria</option>
                    <option>Legislación tributaria</option>
                    <option>Legislación y políticas educativas</option>
                    <option>Literatura latinoamericana</option>
                    <option>Literatura universal</option>
                    <option>Liturgía</option>
                    <option>Lógica</option>
                    <option>Lógica matemática</option>
                    <option>Logicas y pensamiento critico </option>
                    <option>Logística</option>
                    <option>Logística de almacenamiento</option>
                    <option>Loógica y pensamiento critico</option>
                    <option>Macroeconomía</option>
                    <option>Maquinas y herramientas</option>
                    <option>Marketing Internacional I</option>
                    <option>Matemática Financiera</option>
                    <option>Matemáticas I</option>
                    <option>Matemáticas II</option>
                    <option>Matemáticas III</option>
                    <option>Matemáticas IV</option>
                    <option>Materiales I</option>
                    <option>Materiales II</option>
                    <option>Materiales III</option>
                    <option>Materiales IV</option>
                    <option>Materiales V</option>
                    <option>Mechandising</option>
                    <option>Medición y evaluación I</option>
                    <option>Medición y evaluación II</option>
                    <option>Medios audiovisuales I</option>
                    <option>Medios audiovisuales II</option>
                    <option>Medios digitales I</option>
                    <option>Medios digitales II</option>
                    <option>Medios sonoros I</option>
                    <option>Medios sonoros II</option>
                    <option>Mercadeo de servicios</option>
                    <option>Mercadeo e investigación de mercados</option>
                    <option>Mercadeo electrónico </option>
                    <option>Mercadeo internacional</option>
                    <option>Mercado e Inv. De mercados</option>
                    <option>Mercado estratégico</option>
                    <option>Merchandesing y organización de eventos</option>
                    <option>Metodologia de la investigación</option>
                    <option>Metodología de la investigación</option>
                    <option>Metodología de la investigación (anteproyecto)</option>
                    <option>Metodología de la programación I</option>
                    <option>Metodología de la programación II</option>
                    <option>Metodología de la programación III</option>
                    <option>Metodología de la programción IV</option>
                    <option>Metodología y estrategías de la E.A.D</option>
                    <option>Metodologías de la investigación en comunicación</option>
                    <option>Microeconomía I</option>
                    <option>Microeconómia II</option>
                    <option>Misterio de Dios</option>
                    <option>Modelos</option>
                    <option>Modelos pedagógicos</option>
                    <option>Muestreo estadistico</option>
                    <option>Narrativas</option>
                    <option>Naturalez de la organizaciones</option>
                    <option>Negocios internacionales</option>
                    <option>Neuroanatomía </option>
                    <option>Neurociencia y conducta I </option>
                    <option>Neurociencia y conducta II</option>
                    <option>Noticia</option>
                    <option>Optativa en comunicación digital y documental</option>
                    <option>Optativa I</option>
                    <option>Optativa I (AE)</option>
                    <option>Optativa I (CSP)</option>
                    <option>Optativa I (ID)</option>
                    <option>Optativa I (Mercadeo)</option>
                    <option>Optativa I (NI)</option>
                    <option>Optativa I (T.M)</option>
                    <option>Optativa I (TDS)</option>
                    <option>Optativa II</option>
                    <option>Optativa II (AE)</option>
                    <option>Optativa II (CSP)</option>
                    <option>Optativa II (ID)</option>
                    <option>Optativa II (Mercadeo)</option>
                    <option>Optativa II (NI)</option>
                    <option>Optativa II (T.M)</option>
                    <option>Optativa II (TDS)</option>
                    <option>Optativa III (AE)</option>
                    <option>Optativa III (ID)</option>
                    <option>Optativa III (Mercadeo)</option>
                    <option>Optativa III (NI)</option>
                    <option>Optativa III (TDS)</option>
                    <option>Optativa IV (NI)</option>
                    <option>Optativo Praxis Intersubjetiva</option>
                    <option>Optativo Praxis intrasubjetiva</option>
                    <option>Optativo profesional </option>
                    <option>Optativo profesional II</option>
                    <option>Patoral fundamental</option>
                    <option>Pentateuco y narativos</option>
                    <option>Plan de medios</option>
                    <option>Plan de mercadeo </option>
                    <option>Planeación educativa</option>
                    <option>Politica y relaciones intenacionales</option>
                    <option>Practica académica</option>
                    <option>Practica académica o proyecto de grado (ID)</option>
                    <option>Práctica docente I</option>
                    <option>Práctica docente II</option>
                    <option>Práctica empresarial (Mercadeo)</option>
                    <option>Practica II (TGEA)</option>
                    <option>Practica III (TGEA)</option>
                    <option>Práctica investigativa I </option>
                    <option>Práctica investigativa II</option>
                    <option>Práctica Investigativa III</option>
                    <option>Práctica pastoral</option>
                    <option>Práctica Profesional I</option>
                    <option>Practica profesional II</option>
                    <option>Prática de compras em MK y análisis de precios</option>
                    <option>Prática I (TGEA)</option>
                    <option>Presupuestación de proyectos</option>
                    <option>Presupuesto y análisis financiero </option>
                    <option>Presupuestos</option>
                    <option>Problemas Fundamentales de filosofía</option>
                    <option>Problemas Sociales y cultarales II</option>
                    <option>Problemas Sociales y culturales I</option>
                    <option>Procesamiento de señales</option>
                    <option>Procesos Administrativos</option>
                    <option>Procesos de investigación psicologíca I</option>
                    <option>Procesos de investigación psicología II</option>
                    <option>Procesos estocásticos</option>
                    <option>Procesos industriales</option>
                    <option>Producción I</option>
                    <option>Producción II</option>
                    <option>Profetas y sapienciales</option>
                    <option>Proyecto (CSP)</option>
                    <option>Proyecto (LER)</option>
                    <option>Proyecto (Plan de mercado)</option>
                    <option>Proyecto de grado</option>
                    <option>Proyecto de grado (IST)</option>
                    <option>Proyecto I</option>
                    <option>Proyecto II</option>
                    <option>Proyecto III</option>
                    <option>Proyecto IV</option>
                    <option>Proyecto V</option>
                    <option>Proyecto VI</option>
                    <option>Proyecto VII</option>
                    <option>Psicoanálisis I</option>
                    <option>Psicoanálisis II</option>
                    <option>Psicoanalitica </option>
                    <option>Psicolingüistica</option>
                    <option>Psicología</option>
                    <option>Psicología Clinica I</option>
                    <option>Psicología clínica II</option>
                    <option>Psicologìa de la adultez y vejes </option>
                    <option>Psicología de la infancia y adolescencia</option>
                    <option>Psicología del desarrollo</option>
                    <option>Psicología educativa fenomenología de la religión</option>
                    <option>Psicologia Educativa I </option>
                    <option>Psicología Educativa II</option>
                    <option>Psicología general</option>
                    <option>Psicología Organizacional I</option>
                    <option>Psicología Organizacional II</option>
                    <option>Psicología social I</option>
                    <option>Psicología social II</option>
                    <option>Redes y comunicación I</option>
                    <option>Redes y comunicación II</option>
                    <option>Régimen colombiano de comercio exterior </option>
                    <option>Régimen de cambios internacional</option>
                    <option>Reportaje</option>
                    <option>Representación y expresión I</option>
                    <option>Representación y expresión II</option>
                    <option>Representación y expresión III</option>
                    <option>Representación y expresión IV</option>
                    <option>Revelación y fe-Introducción a la teología</option>
                    <option>Sacramentos</option>
                    <option>Salud ocupacional y seguridad industrial</option>
                    <option>Seminario Espiritu emprendedor</option>
                    <option>Sistemas de bases de datos</option>
                    <option>Sistemas Operativos I</option>
                    <option>Sociología</option>
                    <option>Taller de Ev y DX con énfasis en lo intersubjetivo</option>
                    <option>Taller de negociación</option>
                    <option>Taller de proyecto V</option>
                    <option>Taller de proyecto VII</option>
                    <option>Taller de proyectos I</option>
                    <option>Taller de proyectos II</option>
                    <option>Taller de proyectos III</option>
                    <option>Taller de proyectos IV</option>
                    <option>Taller de proyectos VI</option>
                    <option>Taller de proyectos VIII</option>
                    <option>Tecnologia I</option>
                    <option>Tecnologia II</option>
                    <option>Tecnologia III</option>
                    <option>Tecnologia IV</option>
                    <option>Telecomunicaciones</option>
                    <option>Teologia del laicado</option>
                    <option>Teología moral I</option>
                    <option>Teoría de la evaluación</option>
                    <option>Teoría de la imagen</option>
                    <option>Teoría de las telecomunicaciones</option>
                    <option>Teoría de los sistemas</option>
                    <option>Teoria e histroia I</option>
                    <option>Teoria e histroia II</option>
                    <option>Teoria e historia III</option>
                    <option>Teoria e historia IV</option>
                    <option>Teorías de la negociación</option>
                    <option>Termodinamica</option>
                    <option>Territorio I</option>
                    <option>Territorio II</option>
                    <option>Territorio III</option>
                    <option>Territorio IV</option>
                    <option>Trabajo de grado (LER)</option>
                    <option>Trabajo de grado (Mercadeo)</option>
                    <option>Ventas y servicio al cliente</option>

                </select>

                <!-------------------------------------------------------------
                 FIN  SELECT DE FORTALEZAS ACADEMICAS
-------------------------------------------------------------->


            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-4"></div>
            <div class="col-md-4">                
                    <img id="imgperfil" class="img" src="<?php echo base_url(); ?>css/perfil/documento.png" width="100%">  
                    <br>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <div class="col-md-12">
                <button id="listing-button" name="listing-button" class="btn btn-default" style="width:100%;">Registrar</button>
            </div>
        </div>

    </fieldset>
</form>
<script src="<?php echo base_url(); ?>scripts/bootstrap-select.js"></script>
<script>
    $(function() {
        $('#resgitrarmonitor').on('submit', function(e) {

            e.preventDefault();
            var fota = $("#areasfortaleza").val();
            $("#materiasb").val(fota);

            $.ajax({
                url: $("#resgitrarmonitor").attr("action"),
                type: $("#resgitrarmonitor").attr("method"),
                data: $("#resgitrarmonitor").serialize(),
                success: function(data) {
                    if (data) {
                        swal("Opps!", "Problemas al registrar, compruebe si ya esta registrado e intente de nuevo ", "error");
                    } else {
                        swal("Listo", "Se registro el nuevo usuario", "success");
                        location.reload();

                    }

                }
            });

        });

    });
</script>
<script>
    $('.selectpicker').selectpicker();

</script>
<script>
var carretera = "<?php foreach($usuarioc as $duser){ echo $duser->carrera; } ?>";
$("#txtcarrera option").each(function () {
    var caerrrats = $(this).text();
    if(caerrrats == carretera){
        $(this).attr("selected","selected");
        return false;
    }

});

</script>
