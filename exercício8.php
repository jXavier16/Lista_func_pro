<? php
echo  " ============ DIAS DA SEMANA ========== \ n " ;
echo  " | 1 ------------------> Domingo | \ n " ;
echo  " | 2 ------------------> Segunda-feira | \ n " ;
echo  " | 3 ------------------> Terça-feira | \ n " ;
echo  " | 4 ------------------> Quarta-feira | \ n " ;
echo  " | 5 ------------------> Quinta-feira | \ n " ;
echo  " | 6 ------------------> Sexta-feira | \ n " ;
echo  " | 7 ------------------> Sábado | \ n " ;
echo  " ==================================== \ n " ;
função  diasemana ( $ dia ) {
    $ dias  =  array ( ' DOM ' , ' SEG ' , ' TER ' , ' QUA ' , ' QUI ' , ' SEX ' , ' SAB ' );
    if ( $ dia  >  0  e  $ dia  <  7 ) {
    $ msg  =  " o dia $ dia corresponde a: "  .  $ dias [ $ dia ];
    return  $ msg ;
    }
    mais {
        $ msg  =  " ERRO " ;
        return  $ msg ;
    }
}
echo  " Digite o valor correspondente ao dia da semana de hoje: \ n " ;
$ dia  = ( int ) fgets ( STDIN );
$ status  = diasemana ( $ dia );
echo  $ status ;
