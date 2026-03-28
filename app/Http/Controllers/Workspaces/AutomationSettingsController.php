<?php

namespace App\Http\Controllers\Workspaces;

use App\Http\Controllers\Controller;
use App\Models\Workspaces\AutomationSettings;
use Illuminate\Http\Request;

class AutomationSettingsController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return AutomationSettings::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validate and store the new resource
        $data = $request->validate([
            // validation rules
        ]);

        AutomationSettings::create($data);

        return redirect()->route('automationSettingss.index');
    }

    public function show(AutomationSettings $automationSettings)
    {
        return $automationSettings;
    }

    public function edit(AutomationSettings $automationSettings)
    {
        return view('automationSettingss.edit', compact('automationSettings'));
    }

    public function update(Request $request, AutomationSettings $automationSettings)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $automationSettings->update($data);

        return redirect()->route('automationSettingss.index');
    }

    public function destroy(AutomationSettings $automationSettings)
    {
        $automationSettings->delete();

        return redirect()->route('automationSettingss.index');
    }
}