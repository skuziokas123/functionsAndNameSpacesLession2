
 * Kodėl Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) yra 6?
 
 calculateHomeWorkSum(int…$numbers): int; #po Nfq\Akademija\Soft namespace;
 Prieš funkcijos argumentus yra nurodytas int tipas, kuris 2.2 paverčia į 2, o '1' į 1. 3+2+1=6
 
 * Kas ir kodėl nutiko bandant kviesti: Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’)?
 
 Buvo išvesta klaida: Fatal error: Uncaught TypeError: Return value of Nfq\Akademija\Strict\calculateHomeWorkSum() must be of the type integer, float returned in D:\Projects\n-spring-2019\2-paskaita\namu-darbai\src\functions_strict.php:11
Stack trace:
#0 D:\Projects\n-spring-2019\2-paskaita\namu-darbai\index.php(17): Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1')
#1 {main}
  thrown in D:\Projects\n-spring-2019\2-paskaita\namu-darbai\src\functions_strict.php on line 11
  
   Ji įvyko todėl, kad funkcija gražino float tipo rezultatą, nors buvo deklaruota, kad gražins integer.