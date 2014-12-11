drop table if exists Noticia;

/*==============================================================*/
/* Table: Noticia                                               */
/*==============================================================*/
create table Noticia
(
   id_noticia           int not null auto_increment,
   titulo               varchar(100),
   fecha_publicacion    date not null,
   cuerpo               text,
   foto                 varchar(128),
   primary key (id_noticia)
);

INSERT INTO `noticia` (`id_noticia`, `titulo`, `fecha_publicacion`, `cuerpo`, `image`) VALUES
(1, '¿Pueden los humanos infectar a los animales de ébola?', '2014-12-08', 'El presidente del Consejo General de Veterinaria, Juan José Badiola, aseguró a BBC Mundo, que hasta el momento no hay ningún estudio que haya demostrado que el virus del ébola se pueda contagiar de seres humanos a perros. Badiola explicó que el único estudio que demostró la exposición de estos animales al virus se realizó en Gabón entre 2001 y 2002 como consecuencia de un brote en humanos. Tras analizar varias muestras de sangre canina se vio que había un pequeño porcentaje de perros que presentaron "reacciones inmunitarias" pero "ni presentaron síntomas de la enfermedad ni fallecieron". "Se demostró que el ébola estuvo en su sistema inmune, pero en ningún momento el estudio constató que los humanos fueran el origen de la transmisión", dijo Badiola. Según Badiola, estos animales podrían haberse expuesto al virus mediante el contacto con otros animales o por la ingesta de animales muertos. De hecho, por el momento lo único que se ha demostrado es la transmisión del ébola a humanos procedente de murciélagos, simios e incluso algún antílope.', '5053-ebola_virus.jpg'),
(2, 'Adoptar a un animal es salvarle la vida	', '2014-12-08', '“Charlot es una gata que fue abandonada por sus propietarios, cerca de una manada de gatos, que la atacaron e hirieron. A diferencia de ellos, ella no estaba acostumbrada a vivir en la calle”, cuenta Martha Ruiz, miembro de la campaña de protección animal Socio Fiel y quien ha participado en el rescate de varios animales abandonados. Charlot fue encontrada con varias heridas en su cuerpo. Los rescatistas la atendieron y la llevaron a un refugio para mascotas, donde la han ayudado en su rehabilitación, para que pueda compartir de nuevo con una familia. Hoy ya está lista y hace parte del grupo de animales que participan en la jornada de adopción realizada por la fundación Salvando Huellas y Socio Fiel. “Todos los perros y gatos han sido rescatados de las calles en condiciones muy malas. Sin embargo, ya han sido vacunados, desparasitados y esterilizados”, afirma Ruiz. Y para que una familia lo pueda adoptar debe cumplir con ciertas características. Es decir, al llenar un formulario se demuestra si es apta para acoger a una de las mascotas. Igualmente, las personas recibirán asesoría para escoger al animal y durante un tiempo serán visitados por miembros de Salvando Huellas y Socio Fiel, para hacer un seguimiento a la mascota. Para el cirujano veterinario Guillermo Forero, del Centro Clínico Veterinario Dingo, esta es una labor en la que la nueva familia debe tener mucha paciencia para acoger al animal. “La mascota, sobre todo si es perro, puede estar un poco receloso, ya que otros humanos lo han maltratado en el pasado. En este caso se recomienda que los miembros de la familia sean firmes con los horarios y un poco autoritarios con los mandatos hacia el animal, pero sin ser agresivos”, comenta Forero. Agrega que es necesario que el animal tenga un chequeo médico para saber en qué condiciones se encuentra. Igualmente, si quiere adoptar, busque fundaciones que lo guíen en el proceso, pues la idea es que el animal no sea abandonado nuevamente.	', '4867-animales.jpg');
