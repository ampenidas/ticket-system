<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public const CITIES = ["Adana", "Adıyaman", "Afyon", "Ağrı", "Amasya", "Ankara", "Antalya", "Artvin", "Aydın", "Balıkesir", "Bilecik", "Bingöl", "Bitlis", "Bolu", "Burdur", "Bursa", "Çanakkale", "Çankırı", "Çorum", "Denizli", "Diyarbakır", "Edirne", "Elazığ", "Erzincan", "Erzurum", "Eskişehir", "Gaziantep", "Giresun", "Gümüşhane", "Hakkari", "Hatay", "Isparta", "İçel (Mersin)", "İstanbul", "İzmir", "Kars", "Kastamonu", "Kayseri", "Kırklareli", "Kırşehir", "Kocaeli", "Konya", "Kütahya", "Malatya", "Manisa", "Kahramanmaraş", "Mardin", "Muğla", "Muş", "Nevşehir", "Niğde", "Ordu", "Rize", "Sakarya", "Samsun", "Siirt", "Sinop", "Sivas", "Tekirdağ", "Tokat", "Trabzon", "Tunceli", "Şanlıurfa", "Uşak", "Van", "Yozgat", "Zonguldak", "Aksaray", "Bayburt", "Karaman", "Kırıkkale", "Batman", "Şırnak", "Bartın", "Ardahan", "Iğdır", "Yalova", "Karabük", "Kilis", "Osmaniye", "Düzce"
    ];

    public function show(int $id)
    {
        $customer = Customer::find($id);
        return view('customers.read', compact('customer'));
    }

    public function index()
    {
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    public function create()
    {
        $cities = self::CITIES;
        return view('customers.create', compact('cities'));
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('customers.index');
    }

    public function edit(Customer $customer)
    {
        $cities = self::CITIES;
        return view('customers.edit', compact('customer', 'cities'));
    }

    public function update(Request $request, int $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->get('name');
        $customer->long_name = $request->get('long_name');
        $customer->station_code = $request->get('station_code');
        $customer->retailer_code = $request->get('retailer_code');
        $customer->subject = $request->get('subject');
        $customer->phone = $request->get('phone');
        $customer->address = $request->get('address');
        $customer->city = $request->get('city');
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
