<!DOCTYPE html>
<html>
<script src="script.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" </head>
</head>


<div class="root">
    <div class="sideBar">

        <div class="side">


            @include('layouts.nav')

        </div>
    </div>

    <nav class="profile">

        @include('layouts.header')

    </nav>
    <div class="nave">
        <img src="image/photoes.png" class="nave" alt="Navigation" />
    </div>

    <body>
        <div class="main">

            <div class="teacher-cards">
                <article class="teacher-card">
                    <img src="{{ asset('image/qara.png') }}" alt="Teacher محمد أحمد" class="teacher-image" />
                    <div class="teacher-info">
                        <h2 class="teacher-name">محمد أحمد</h2>
                        <p class="teacher-description">يمكن اضافة لمحة عن المدرس هنا حيث يمكن ان تكون سطر او
                            سطرين بحيث لا تتجاوز اكثر حسب المسافرة المتوفرة لدينا</p>
                    </div>
                    <hr class="divider" />

                </article>

                </article>
                <article class="teacher-card">
                    <img src="{{ asset('image/qara.png') }}" alt="Teacher محمد أحمد" class="teacher-image" />
                    <div class="teacher-info">
                        <h2 class="teacher-name">محمد أحمد</h2>
                        <p class="teacher-description">يمكن اضافة لمحة عن المدرس هنا حيث يمكن ان تكون سطر او
                            سطرين بحيث لا تتجاوز اكثر حسب المسافرة المتوفرة لدينا</p>
                    </div>
                    <hr class="divider" />
                </article>
                <article class="teacher-card">
                    <img src="{{ asset('image/qara.png') }}" alt="Teacher محمد أحمد" class="teacher-image" />
                    <div class="teacher-info">
                        <h2 class="teacher-name">محمد أحمد</h2>
                        <p class="teacher-description">يمكن اضافة لمحة عن المدرس هنا حيث يمكن ان تكون سطر او
                            سطرين بحيث لا تتجاوز اكثر حسب المسافرة المتوفرة لدينا</p>
                    </div>
                    <hr class="divider" />
                </article>




            </div>
        </div>


        </article>
</div>
</div>
</div>

</div>


</body>

</html>
