<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
         public function open() 
            {
                $data = "This data is open and can be accessed without the client being authenticated";
                return response()->json(compact('data'),200);
            }

            public function closed() 
            {
                $data = "Only authorized users can see this";
                return response()->json(compact('data'),200);
            }

   
    public function lecon2()
    {
    return view('lecon/lecon2');
    }
    
    public function lecon3()
    {
        return view('lecon/lecon3');
    }
    public function lecon4()
    {
        return view('lecon/lecon4');
    }
    public function lecon5()
    {
        return view('lecon/lecon5');
    }
    public function lecon6()
    {
        return view('lecon/lecon6');
    }
    public function lecon7()
    {
        return view('lecon/lecon7');
    }
    public function lecon8()
    {
        return view('lecon/lecon8');
    }

    public function lecon9()
    {
        return view('lecon/lecon9');
    }
    public function lecon10()
    {
        return view('lecon/lecon10');
    }
    public function lecon11()
    {
        return view('lecon/lecon11');
    }
    public function lecon12()
    {
        return view('lecon/lecon12');
    }
    public function lecon13()
    {
        return view('lecon/lecon13');
    }
    public function lecon14()
    {
        return view('lecon/lecon14');
    }
    public function lecon15()
    {
        return view('lecon/lecon15');
    }
    public function lecon16()
    {
        return view('lecon/lecon16');
    }
    public function lecon17()
    {
        return view('lecon/lecon17');
    }
    public function lecon18()
    {
        return view('lecon/lecon18');
    }
    public function lecon19()
    {
        return view('lecon/lecon19');
    }
    public function lecon20()
    {
        return view('lecon/lecon20');
    }
    public function lecon21()
    {
        return view('lecon/lecon21');
    }
    public function lecon22()
    {
        return view('lecon/lecon22');
    }
    public function lecon23()
    {
        return view('lecon/lecon23');
    }
    public function lecon24()
    {
        return view('lecon/lecon24');
    }
    public function lecon25()
    {
        return view('lecon/lecon25');
    }

    public function lecon26()
    {
        return view('lecon/lecon26');
    }
    public function lecon27()
    {
        return view('lecon/lecon27');
    }
    public function lecon28()
    {
        return view('lecon/lecon28');
    }
    public function lecon29()
    {
        return view('lecon/lecon29');
    }
    public function lecon30()
    {
        return view('lecon/lecon30');
    }
    public function lecon31()
    {
        return view('lecon/lecon31');
    }
    public function lecon32()
    {
        return view('lecon/lecon32');
    }
    public function lecon33()
    {
        return view('lecon/lecon33');
    }
    public function lecon34()
    {
        return view('lecon/lecon34');
    }
    public function lecon35()
    {
        return view('lecon/lecon35');
    }
    public function lecon36()
    {
        return view('lecon/lecon36');
    }
    public function lecon37()
    {
        return view('lecon/lecon37');
    }
    public function lecon38()
    {
        return view('lecon/lecon38');
    }
    public function lecon39()
    {
        return view('lecon/lecon39');
    
    }
    
    public function lecon1()
    {
        return View('lecon/lecon1');
    }
    
    public function lecon40()
    {
        return view('lecon/lecon40');
    }
    public function lecon41()
    {
        return view('lecon/lecon41');
    }
    public function lecon42()
    {
        return view('lecon/lecon42');
    }
    public function lecon43()
    {
        return view('lecon/lecon43');
    }
    public function lecon44()
    {
        return view('lecon/lecon44');
    }
    public function lecon45()
    {
        return view('lecon/lecon45');
    }
    public function lecon46()
    {
        return view('lecon/lecon46');
    }
    public function lecon47()
    {
        return view('lecon/lecon47');
    }
    public function lecon48()
    {
        return view('lecon/lecon48');
    }
    public function lecon49()
    {
        return view('lecon/lecon49');
    }
    public function lecon50()
    {
        return view('lecon/lecon50');
    }
    public function lecon51()
    {
        return view('lecon/lecon51');
    }
    public function lecon52()
    {
        return view('lecon/lecon52');
    }
    public function lecon53()
    {
        return view('lecon/lecon53');
    }
    public function lecon54()
    {
        return view('lecon/lecon54');
    }
    public function lecon55()
    {
        return view('lecon/lecon55');
    }
    public function lecon56()
    {
        return view('lecon/lecon56');
    }
    public function lecon57()
    {
        return view('lecon/lecon57');
    }
    public function lecon58()
    {
        return view('lecon/lecon58');
    }
    public function lecon59()
    {
        return view('lecon/lecon59');
    }
    public function lecon60()
    {
        return view('lecon/lecon60');
    }
    public function lecon61()
    {
        return view('lecon/lecon61');
    }
    public function lecon62()
    {
        return view('lecon/lecon62');
    }
    public function lecon63()
    {
        return view('lecon/lecon63');
    }
    public function lecon64()
    {
        return view('lecon/lecon64');
    }
    public function lecon65()
    {
        return view('lecon/lecon65');
    }
    public function lecon66()
    {
        return view('lecon/lecon66');
    }
    public function lecon67()
    {
        return view('lecon/lecon67');
    }
    public function lecon68()
    {
        return view('lecon/lecon68');
    }
    public function lecon69()
    {
        return view('lecon/lecon69');
    }
    public function lecon70()
    {
        return view('lecon/lecon70');
    }
    public function lecon71()
    {
        return view('lecon/lecon71');
    }
    public function lecon72()
    {
        return view('lecon/lecon72');
    }
    public function lecon73()
    {
        return view('lecon/lecon73');
    }
    public function lecon74()
    {
        return view('lecon/lecon74');
    }
    public function lecon75()
    {
        return view('lecon/lecon75');
    }
    public function lecon76()
    {
        return view('lecon/lecon76');
    }
    public function lecon77()
    {
        return view('lecon/lecon77');
    }
    public function lecon78()
    {
        return view('lecon/lecon78');
    }
    public function lecon79()
    {
        return view('lecon/lecon79');
    }
    public function lecon80()
    {
        return view('lecon/lecon80');
    }
    public function lecon81()
    {
        return view('lecon/lecon81');
    }
    public function lecon82()
    {
        return view('lecon/lecon82');
    }
    public function lecon83()
    {
        return view('lecon/lecon83');
    }
    public function lecon84()
    {
        return view('lecon/lecon84');
    }
    public function lecon85()
    {
        return view('lecon/lecon85');
    }
    public function lecon86()
    {
        return view('lecon/lecon86');
    }
    public function lecon87()
    {
        return view('lecon/lecon87');
    }
    public function lecon88()
    {
        return view('lecon/lecon88');
    }
    public function lecon89()
    {
        return view('lecon/lecon89');
    }
    public function lecon90()
    {
        return view('lecon/lecon90');
    }
    public function lecon91()
    {
        return view('lecon/lecon91');
    }
    public function lecon92()
    {
        return view('lecon/lecon92');
    }
    public function lecon93()
    {
        return view('lecon/lecon93');
    }
    public function lecon94()
    {
        return view('lecon/lecon94');
    }
    public function lecon95()
    {
        return view('lecon/lecon95');
    }
    public function lecon96()
    {
        return view('lecon/lecon96');
    }
    public function lecon97()
    {
        return view('lecon/lecon97');
    }
    public function lecon98()
    {
        return view('lecon/lecon98');
    }
    public function lecon99()
    {
        return view('lecon/lecon99');
    }
    public function lecon100()
    {
        return view('lecon/lecon100');
    }
    public function lecon101()
    {
        return view('lecon/lecon101');
    }
    public function lecon102()
    {
        return view('lecon/lecon102');
    }
    public function lecon103()
    {
        return view('lecon/lecon103');
    }
    public function lecon104()
    {
        return view('lecon/lecon104');
    }
    public function lecon105()
    {
        return view('lecon/lecon105');
    }
    public function lecon106()
    {
        return view('lecon/lecon106');
    }
    public function lecon107()
    {
        return view('lecon/lecon107');
    }
    public function lecon108()
    {
        return view('lecon/lecon108');
    }
    public function lecon109()
    {
        return view('lecon/lecon109');
    }
    public function lecon110()
    {
        return view('lecon/lecon110');
    }
    public function lecon111()
    {
        return view('lecon/lecon111');
    }
    public function lecon112()
    {
        return view('lecon/lecon112');
    }
    public function lecon113()
    {
        return view('lecon/lecon113');
    }
    public function lecon114()
    {
        return view('lecon/lecon114');
    }
    public function lecon115()
    {
        return view('lecon/lecon115');
    }
    public function lecon116()
    {
        return view('lecon/lecon116');
    }
    public function lecon117()
    {
        return view('lecon/lecon117');
    }
    public function lecon118()
    {
        return view('lecon/lecon118');
    }
    public function lecon119()
    {
        return view('lecon/lecon119');
    }
    public function facon1()
    {
        return view('lecon/facon1');
    }
    public function facon2()
    {
        return view('lecon/facon2');
    }
    public function facon3()
    {
        return view('lecon/facon3');
    }
    public function facon4()
    {
        return view('lecon/facon4');
    } 
    public function facon5()
    {
        return view('lecon/facon5');
    }
    
    public function texte1()
    {
        return view('lecon/texte1');
    }
    public function texte2()
    {
        return view('lecon/texte2');
    }
    public function mode_demploi()
    {
        return view('lecon/mode_demploi');
    }
      public function lecon_speciale()
    {
        return view('lecon/lecon_speciale');
    }
    
     public function about()
    {
        return view('lecon/about');
    }
     public function introduction()
    {
        return view('lecon/introduction');
    }
}
