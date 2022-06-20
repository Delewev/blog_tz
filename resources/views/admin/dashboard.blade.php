@extends('admin.layouts.app_admin')

@section('content')
<link rel="stylesheet" href="/css/style.css">

<body>
    <div class="conteiner">
        <form action="{{ route('update.profile') }}" method="post" id="contactForm">
            <div class="form">
                @csrf
                <div class="conteiner-head">
                    <div class="conteiner-user__name">
                        <h4>User Profil</h4>
                    </div>
                    <div class="conteiner-head__btn__cancel"><button id="save" class="button button5">CANCEL</button>
                    </div>
                    <div class="conteiner-head__btn__save"><button name="update" id="submit"
                            class="button button5">SAVE</button>
                    </div>
                </div>
                <div class="conteiner-photo">

                    <div class="conteiner-photo__user">
                        <img class="rounded-circle mt-7" width="100px"
                            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    </div>
                </div>
                <div class="conteiner-email">
                    <div class="conteiner-email__email">{{ $user->email }}</div>
                </div>
                <div class="conteiner-job">
                    <div class="conteiner-job_form">
                        <p>Name <input type="name" name="user" id="name" placeholder="{{ $user->name }}"></p>
                        <p>Job <input type="text" name="job" id="job" placeholder="{{ $user->job }}"></p>
                        <p>Company <input type="text" name="company" id="company" placeholder="{{ $user->company }}">
                        </p>
                    </div>
                </div>
                <div class="conteiner-contact_c">
                    <div class="conteiner-contact_con">
                        <h4>Contact</h4>
                    </div>
                </div>
                <div class="conteiner-contact">
                    <div class="conteiner-contact__form">
                        <p>Phone on. <input type="tel" name="phone" id="phone"> <button
                                class="button button5">+</button></p>
                        <p>Mobil on. <input type="tel" name="mobil" id="mobil"> <button
                                class="button button5">+</button></p>
                        <p>Email <input type="email" name="additionalemail"> <button
                                class="button button5">+</button>
                        </p>
                    </div>
                </div>
                <div class="conteiner-adres">
                    <div class="conteiner-adres_user">
                        <h4>Address</h4>
                    </div>
                    <div class="conteiner-adres_comblod">

                        <div class="conteiner-adres_coutry">
                            <p>Country <input type="text" name="contry" id="contry"></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="">
        $('#contactForm').on('submit', function(event) {
            event.preventDefault();

            let name = $('#name').val();;
            let job = $('#job').val();
            let company = $('#company').val();
            let phone = $('#phone').val();
            let mobil = $('#mobil').val();
            let contry = $('#contry').val();
           



            $.ajax({
                url: "/profile",
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    job: job,
                    company: company,
                    phone: phone,
                    mobil: mobil,
                    contry: contry,
                    
                },
                success: function(response) {
                    console.log(response);
                },
            });
        });
    </script>


</body>
@endsection

