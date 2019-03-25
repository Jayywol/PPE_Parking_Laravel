<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['duration'];

    /*
     * Relations
     */
    public function user()
        {
          return $this->belongsTo('\App\User');
        }

    public function place()
        {
          return $this->belongsTo('\App\Place');
        }

    /*
     * Fonction
     */

    /*
     * Retourne la date de fin grâce à la durée et la date de création.
     */
    public function addDay()
    {
        return convertDate(convertDate($this->created_at)." +".$this->duration." days");
    }

    /*
     * Retourne le nombre de jours restant entre la date actuel et la date de fin
     */
    public function remainingDays()
    {
        return (strtotime($this->addDay()) - strtotime(date("Y-m-d"))) / 86400;
    }

    /*
     * Vérifie si la date est inférieur à la date atuel.
    */
    public function checkExpired()
    {
        return $this->remainingDays() <= 0;
    }

}
