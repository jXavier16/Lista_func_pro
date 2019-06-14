<? php
função  nota ( $ nota1 , $ nota2 ) {
    $ media  = ( $ nota1  +  $ nota2 ) / 2 ;
    if ( $ media  > =  6 ) {
        $ msg  =   " PARABÉNS! Você foi aprovado com média "  .  $ media  .  " \ n " ;
    }
    mais {
        $ msg  =   " LAMENTO :(. Você foi reprovado com média "  .  $ media  .  " \ n " ;
    }
    return  $ msg ;
}
echo  " Digite uma primeira nota do aluno: \ n " ;
$ nota1  = ( int ) fgets ( STDIN );
echo  " Digite uma segunda nota do aluno: \ n " ;
$ nota2  = ( int ) fgets ( STDIN );
$ status  = nota ( $ nota1 , $ nota2 );
echo  $ status ;
