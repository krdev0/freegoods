@if(session()->has('success'))
    <div x-data="{show : true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" 
        class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-green-900 text-white text-sm p-4"
        >
        <p>{{session('success')}}</p>
    </div>
@endif