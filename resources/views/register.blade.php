@extends('layouts.main')

@section('content')
<h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>
    <form action="{{ route('welcome') }}" method="post">
    @csrf
        <p>First name:</p>
        <input type="text" name="first_name" id="fname">
        <p>Last name:</p>
        <input type="text" name="last_name" id="lname">
        <p>Gender:</p>
        <input type="radio" name="gender" id="gmale">
            <label for="gmale">Male</label><br>
        <input type="radio" name="gender" id="fmale">
            <label for="fmale">Female</label><br>
        <input type="radio" name="gender" id="gother">
            <label for="gother">Other</label><br>
        <p>Nationality:</p>
        <select name="nationality" id="nation">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select>
        <p>Languange Spoken:</p>
        <input type="checkbox" name="languange" id="bindo" value="indonesia">
            <label for="bindo">Bahasa Indonesia</label><br>
        <input type="checkbox" name="languange" id="bing" value="english">
            <label for="bing">English</label><br>
        <input type="checkbox" name="languange" id="bother" value="other">
            <label for="bother">Other</label><br>
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form> 
@endsection