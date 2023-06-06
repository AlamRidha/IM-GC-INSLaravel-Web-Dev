@extends('layouts.main')

@section('container')
    <h1>Buat Account Baru!</h1>

    <h4>Sign Up Form</h4>
    <form action="/home">
        <p>First Name : </p>
        <input type="text">
        <p>Last Name : </p>
        <input type="text">
        <p>Gender</p>
        <input type="radio" value="Male"> <label>Male</label><br>
        <input type="radio" value="Female"> <label>Female</label><br>
        <input type="radio" value="Other"> <label>Other</label>
        <p>Nationality : </p>
        <select name="" id="">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysia">Malaysia</option>
            <option value="America">America</option>
        </select>
        <p>Languange Spoken</p>
        <input type="checkbox" value="Bahasa Indonesia"><label>Bahasa Indonesia</label><br>
        <input type="checkbox" value="English"><label>English</label><br>
        <input type="checkbox" value="Other"><label>Other</label>
        <p>Bio</p>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
@endsection('container')
