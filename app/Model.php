<?php
// parent class ahmyto en ay model b3d keda hy extends l class da wl class da hy extends l eloquent class 
//3mlna keda 3shan lma l user yd5l data fl form ana lazm a3ml protect ll form bta3ty w msh asm7 eno yd5l 9er fi fields mo3yna 
// f bdl ma kol form a3mlha lazm aftkr eni a3ml protected fields f an ah7ot l code hna w b3d keda ay model gded hyt3ml hwa hywrs l klam da



namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //protect the fields 
    protected $guarded = [];
    // hna ktbna l fields ely masmo7 en l user yd5l feha data mmkn tt3ml btare2a tanya eni aktb l fields ely msh msmo7 ytktb feha data y3ni aktb msln user_id
}
