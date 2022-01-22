@extends ('layout.console')

@section ('content')

<section class="w3-padding ca-container-small">

    @include ('layout.title', ['title' => 'Edit User'])

    @include ('layout.breadcrumbs', ['links' => ['Manage Users' => '/users/list'], 'title' => 'Edit User: '.$user->first.' '.$user->last])

    <form method="post" action="/users/edit/{{$user->id}}" novalidate class="w3-margin-bottom" autocomplete="off">

        @csrf

        <div class="w3-margin-bottom">
            <label for="first">First Name:</label>
            <input type="text" name="first" id="first" value="{{old('first', $user->first)}}" required class="w3-input w3-border">
            
            @error ('first')
                <small class="w3-text-red">{{$message}}</small>
            @enderror
        </div>

        <div class="w3-margin-bottom">
            <label for="last">Last Name:</label>
            <input type="text" name="last" id="last" value="{{old('last', $user->last)}}" required class="w3-input w3-border">
            
            @error ('last')
                <small class="w3-text-red">{{$message}}</small>
            @enderror
        </div>

        <div class="w3-margin-bottom">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{old('email', $user->email)}}" class="w3-input w3-border">

            @error ('email')
                <small class="w3-text-red">{{$message}}</small>
            @enderror
        </div>

        <div class="w3-margin-bottom">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="w3-input w3-border">

            @error ('password')
                <small class="w3-text-red">{{$messsage}}</small>
            @enderror
        </div>

        <div class="w3-center">
            <button type="submit" class="w3-button w3-orange">Edit User</button>
        </div>

    </form>

</section>

@endsection