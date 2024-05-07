@extends('p::app')

@section('content')
    <section class="mb-8">
        <h1 class="text-2xl">Checkbox</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-checkbox label="Checkbox OFF" description="Active, off by default"/>
            </div>
            <x-p-paper>
                <x-p-checkbox label="Checkbox OFF" description="Active, off by default. Uses paper component."/>
            </x-p-paper>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-checkbox label="Checkbox ON" description="Active, on by default" checked/>
            </div>
            <x-p-paper>
                <x-p-checkbox label="Checkbox ON" description="Active, on by default. Uses paper component."
                              checked/>
            </x-p-paper>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-checkbox label="Checkbox OFF" description="DISABLED/off" disabled/>
            </div>
            <x-p-paper>
                <x-p-checkbox label="Checkbox OFF" description="DISABLED/off. Uses paper component." disabled/>
            </x-p-paper>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-checkbox label="Checkbox ON" description="DISABLED/on" checked disabled/>
            </div>
            <x-p-paper>
                <x-p-checkbox label="Checkbox ON" description="DISABLED/on. Uses paper component." checked
                              disabled/>
            </x-p-paper>
        </div>
    </section>




    <section class="mb-8">
        <h1 class="text-2xl">Switch (checkbox)</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-checkbox asSwitch label="Switch OFF" description="Active, off by default"/>
            </div>
            <x-p-paper>
                <x-p-checkbox asSwitch label="Switch OFF" description="Active, off by default. Uses paper component."/>
            </x-p-paper>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-checkbox asSwitch label="Switch ON" description="Active, on by default" checked/>
            </div>
            <x-p-paper>
                <x-p-checkbox asSwitch label="Switch ON" description="Active, on by default. Uses paper component."
                              checked/>
            </x-p-paper>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-checkbox asSwitch label="Switch OFF" description="DISABLED/off" disabled/>
            </div>
            <x-p-paper>
                <x-p-checkbox asSwitch label="Switch OFF" description="DISABLED/off. Uses paper component." disabled/>
            </x-p-paper>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-checkbox asSwitch label="Switch ON" description="DISABLED/on" checked disabled/>
            </div>
            <x-p-paper>
                <x-p-checkbox asSwitch label="Switch ON" description="DISABLED/on. Uses paper component." checked
                              disabled/>
            </x-p-paper>
        </div>
    </section>

    <section class="mb-8">
        <h1 class="text-2xl">Radio buttons</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-radio name="radio" value="1" label="Radio 1" description="Active, off by default"/>
                <x-p-radio name="radio" value="2" label="Radio 2" description="Active, on by default" checked/>
                <x-p-radio name="radio" value="3" label="Radio 3" description="Test" disabled/>
            </div>
            <x-p-paper>
                <x-p-radio name="pap-radio" label="Radio 1" description="Active, off by default"/>
                <x-p-radio name="pap-radio" label="Radio 2" description="Active, on by default" checked/>
                <x-p-radio name="pap-radio" label="Radio 3" description="Test" disabled/>
            </x-p-paper>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-2">
            <div class="p-2">
                <x-p-radio name="radio-dis" label="radio 1" description="Disabled, off by default" disabled/>
                <x-p-radio name="radio-dis" label="radio 2" description="Disabled, on by default" disabled checked/>
            </div>
            <x-p-paper>
                <x-p-radio name="pap-radio-dis" label="radio 1" description="Disabled, off by default" disabled/>
                <x-p-radio name="pap-radio-dis" label="radio 2" description="Disabled, on by default" disabled checked/>
            </x-p-paper>
        </div>
    </section>

@endsection

