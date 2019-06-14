<? php
function  numeros ( $ x , $ y ) {
    if ( $ x  /  $ y  >  0 ) {
        $ msg  =  " \ n 1 " ;
        return  $ msg ;
    }
    mais {
        $ msg  =  " \ n 0 " ;
        return  $ msg ;
    }
}
echo  " Se X divido por Y tiver valor positivo, será exibido na tela '1', se for negativo, será exibido '0' \ n " ;
echo  " Digite um valor para X: \ n " ;
$ x  = ( int ) fgets ( STDIN );
echo  " Digite um valor para Y: \ n " ;
$ y  = ( int ) fgets ( STDIN );
$ status  = numeros ( $ x , $ y );
echo  $ status ;
