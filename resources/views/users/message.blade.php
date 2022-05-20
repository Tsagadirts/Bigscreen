@extends('layouts.master')

<body id="message">
    <section>
        <div class="col-sm-10 col-sm offset-1">
            <p class="text-center"> Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à
                                    votre investissement, nous vous préparons une application toujours plus
                                    facile à utiliser, seul ou en famille.
                                    <br>
                                    Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez
                                    cette adresse: <a href="/result/{{$token}}">LINK</a>
            </p>
        </div>
    </section>
</body>  



<style>
    #message{
        background-color: #CCD9E2
    }

    p{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
       color: #4f6457;
       
    }

    a{
        color: #e05567;
        font-weight:bold;
    }

    section{
       height: 200px;
       line-height: 100px;
       text-align: center;; 
    }
</style>