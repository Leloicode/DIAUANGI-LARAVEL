<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Deliciousfood;
use App\Models\Dishs;
use App\Models\Evaluate;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchDishCity(Request $request ,$id)
    {
        $search=$request->monancity;
        $City = City::where('IdCity',$id)->first();
        $Restaurants=Restaurant::where('Id_city',$id)->get();
        // $Restaurants=DB::table('citys');
        // ->join('restaurant','restaurant.Id_city', '=' ,'citys.IdCity')
        // ->join('deliciousfood','restaurant.IdRestaurant', '=', 'deliciousfood.id_restaurant')
        // ->join('dish')
        $dishSearch=DB::select(DB::raw("SELECT * FROM `restaurant`,`citys`,`dish`,`deliciousfood` WHERE restaurant.Id_city = citys.IdCity AND restaurant.IdRestaurant = deliciousfood.id_restaurant AND deliciousfood.id_dish = dish.IdDish AND dish.NameDish LIKE '%$search%' AND citys.IdCity='$id'"));
        // dd($dishSearch);
        return view('User.city',compact('dishSearch','Restaurants','City','search'));
    }
    public function searchCity(Request $request)
    {
        $search = $request->thanhpho;
        $Citys= City::where('NameCity','like','%'.$search.'%')->paginate(10, ['*'], 'pag');
        return view('User.citys',compact('Citys'));
    }
    public function postSearch(Request $request)
    {
        $search = $request->monan;
        $Dishs= Dishs::where('NameDish','like','%'.$search.'%')->paginate(20, ['*'], 'pag');
        // dd($Dishs);
        return view('User.search',compact('search','Dishs'));
        
    }
    public function index()
    {
        $DishOustand = Dishs::where('Outstand',1)->get();
        $Restaurants = Restaurant::where('Oustand',1)->get();
        $CityOustands = City::where('Oustand',1)->get();
        // dd($DishOustand[0]->NameDish);
        // dd($CityOustands);
        return view('User.home',compact('DishOustand','Restaurants','CityOustands'));
    }
    public function getDeliciousFood($id)
    {   

        $Restaurants = Deliciousfood::where('id_dish',$id)->get();
        // $Restaurants = Restaurant::all();

    
        return view('User.dishOrRestaurant',compact('Restaurants'));
    }
    public function getRestaurant($id)
    {
        // dd($id);

        $Restaurant = Restaurant::where('IdRestaurant',$id)->first();
        $Evaluates = Evaluate::where('Id_restaurant',$id)->orderBy('IdEvaluate', 'DESC')->paginate(6, ['*'], 'page');
        $Dishs = Deliciousfood::where('id_restaurant',$id)->paginate(6, ['*'], 'pag');
        // dd($Dishs);
        return view('User.restaurant',compact('Dishs','Restaurant','Evaluates'));
    }
    public function getContact()
    {
        return view('User.contact');
    }
    public function getCity($id)
    {
        $City = City::where('IdCity',$id)->first();
        $Restaurants = Restaurant::where('Id_city',$id)->get();
        return view('User.city',compact('Restaurants','City'));

    }
    public function getCitys()
    {
        $Citys = City::paginate(6, ['*'], 'pag');
        return view('User.citys',compact('Citys'));
    }
    public function getDishs()
    {
        $Dishs = Dishs::paginate(6, ['*'], 'pag');
        return view('User.dishs',compact('Dishs'));
    }
    public function getmap()
    {
        return view('User.map');
    }
    public function addEvaluete(Request $request,$id)
    {
        $name = $request->name;
        $value = $request->value;
        $Evaluate = new Evaluate();
        $Evaluate->Id_Restaurant = $id;
        $Evaluate->Content = $value;
        $Evaluate->Name = $name;
        $Evaluate->save();
        return redirect()->back()->with('tb','Cảm ơn bạn đã đánh giá');
        // dd($name);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
