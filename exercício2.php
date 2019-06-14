<? php
Função  hipotenusa ( $ catetoA , $ catetoB ) {
    $ hip  =  sqrt ( $ catetoA * $ catetoA  +  $ catetoB * $ catetoB );
    $ msg  =  " A hipotenusa é igual a: " .  $ quadril  .  " \ n " ;
    return  $ msg ;
}
echo  " Digite o valor do cateto A: \ n " ;
$ catetoA  = ( int ) fgets ( STDIN );
echo  " Digite o valor do cateto B: \ n " ;
$ catetoB  = ( int ) fgets ( STDIN );
$ status  = hipotenusa ( $ catetoA , $ catetoB );
echo  $ status ;
