<? php
 soma da função ( $ n1 , $ n2 ) {
    $ soma  =  $ n1  +  $ n2 ;
    $ msg  =  " Um soma de $ n1 + $ n2 é igual a: "  .  $ soma  .  " \ n " ;
    return  $ msg ;
}
echo  " Digite o n1: \ n " ;
$ n1  = ( int ) fgets ( STDIN );
echo  " Digite o n2: \ n " ;
$ n2  = ( int ) fgets ( STDIN );
$ status  = soma ( $ n1 , $ n2 );
echo  $ status ;
