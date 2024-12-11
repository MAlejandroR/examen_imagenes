<?php


class Pregunta extends PreguntaImagen
{

   private string $respuesta_correcta;
   private string $respueta_alumno;
   private int $letras_acertadas;
   private bool $aprobado;//si todas las letras coinciden
   private bool $acierto_parcial; //Si tiene más de la mitad de las letras acertadas



}