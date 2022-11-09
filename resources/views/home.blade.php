@extends('layouts.main')

@section('container')

<div class="sectionhome">



    <div class="sloganteng">
        <h1>Your Random Number Generatro</h1>
    </div>

        <?php
            $numb = rand(1,10);
            if (isset($_GET['submit'])) {
                $numb = rand(1,10);
            }
        ?>

        <?php
            $numb1 = rand(10,100);
            if (isset($_GET['submit'])) {
                $numb1 = rand(10,100);
            }
        ?>

        <?php
            $numb2 = rand(100,1000);
            if (isset($_GET['submit'])) {
                $numb2 = rand(100,1000);
            }
        ?>


    <div class="cont-wrap">

        <div class="packet-wrap">

            <div class="wrapper">

                <div class="titlebox">
                    <h2>Generatro 1 to 10 </h2>
                </div>

                <div class="number1">
                    <?php echo $numb?>
                </div>

                <div class="desc">
                    @if($numb%2!=0)
                        <div>Odd</div>
                    @else
                        <div>Even</div>
                    @endif
                </div>

            </div>

            <div class="wrapper">

                <div class="titlebox">
                    <h2>Generatro 10 to 100 </h2>
                </div>

                <div class="number2">
                    <?php echo $numb1?>
                </div>

                <div class="desc">
                    @if($numb1%2!=0)
                        <div>Odd</div>
                    @else
                        <div>Even</div>
                    @endif
                </div>

            </div>

            <div class="wrapper">


                <div class="titlebox">
                    <h2>Generatro 100 to 1000 </h2>
                </div>

                <div class="number3">
                    <?php echo $numb2?>
                </div>

                <div class="desc">
                    @if($numb2%2!=0)
                        <div>Odd</div>
                    @else
                        <div>Even</div>
                    @endif
                </div>

            </div>
        </div>

        <form method="GET">
            <input class="button" type="submit" name="submit2" value="Generate">
       </form>

    </div>

</div>



@endsection

