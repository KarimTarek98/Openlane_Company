<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreService;
use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Traits\Notification;

class ServiceController extends Controller
{
    use Notification;
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.all_services', compact('services'));
    }

    public function addService()
    {
        return view('admin.services.add_service');
    }

    public function storeService(StoreService $request)
    {
        $img = $request->file('service_img');

        $imgGenerateName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();

        Image::make($img)->resize(323, 240)->save('uploads/services/' . $imgGenerateName);

        $saveUrl = 'uploads/services/' . $imgGenerateName;

        $service = Service::create([
            'service_title' => $request->service_title,
            'service_description' => $request->service_description,
            'service_list' => $request->service_list,
            'service_img' => $saveUrl
        ]);

        if ($service)
        {
            return $this->notification('Service Added Successfully', 'success', 'admin.services');
        }
        else
        {
            return $this->notification('Service Not Added, try again', 'error', 'admin.services');
        }
    }

    public function editService($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.edit_service', compact('service'));
    }

    public function updateService(Request $request)
    {
        $serviceID = $request->id;

        $service = Service::findOrFail($serviceID);

        if ($request->file('service_img'))
        {
            unlink($service->service_img);
            $img = $request->service_img;
            $imgGenerateName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(323, 240)->save('uploads/services/' . $imgGenerateName);
            $saveUrl = 'uploads/services/' . $imgGenerateName;

            $service->update([
                'service_title' => $request->service_title,
                'service_description' => $request->service_description,
                'service_list' => $request->service_list,
                'service_img' => $saveUrl
            ]);
            return $this->notification('Service Updated Successfully', 'success', 'admin.services');

        }
        else
        {
            $service->update([
                'service_title' => $request->service_title,
                'service_description' => $request->service_description,
                'service_list' => $request->service_list,
            ]);
            return $this->notification('Service Updated Successfully', 'success', 'admin.services');
        }
    }

    public function deleteService($id)
    {
        $service = Service::findOrFail($id);

        unlink($service->service_img);

        $service->delete();

        return $this->notification('Service Deleted!', 'error', 'admin.services');
    }

    public function allServices()
    {
        $services = Service::latest()->paginate(3);

        return view('app.services.all', compact('services'));
    }

    public function serviceDetails($id)
    {
        $service = Service::find($id);

        return view('app.services.service_details', compact('service'));
    }

}
