<?php
/* php는 html 안에 들어가서 웹페이지의 동작을 담당할 수 있다. 단독으로도 물론 사용가능하다
php는 <?php 로 선언해서 내부에서 php를 쓰고 끝날 때 ?>로 닫아준다
변수명은 앞에 $을 붙인다
c, cpp처럼 동적배열이 사용가능하다
문자열은 java, c, cpp처럼 큰따옴표(double quotation marks) " "사이에 입력한다
코드의 끝은 세미콜론으로 닫아준다
상수의 정의는 define을 사용한다.
define('상수의이름', '상수의값'); 으로 사용한다
개행문자는 echo(혹은 print) '<br />';를 사용한다
조건문, 반복문, 논리연산자는 다른 프로그래밍 언어들과 똑같이 사용한다


c, cpp의 함수나 java의 메소드처럼 따로 함수를 만들어 사용할 수 있다. return은 생략하여 void로 쓸 수 있고, return을 사용하여 특정값을 넘길 수 있다
이렇게 사용할 때는 다른 프로그래밍 언어처럼 형을 맞춰줄 필요는 없다
function 함수명( [인자...[,인자]] ){
   코드
   return 반환값;
}

배열은 $member = ['egoing', 'k8805', 'sorialgi']; 처럼 사용한다
$member[0]~$member[2] 안에 각각의 문자열 값들이 들어가있다

$l = [1, 2, 3, 4, 5];
echo count($l); 배열의 크기를 알아내는 예제이다

배열의 끝에 아이템을 추가하는 방법
$arr = ['a', 'b', 'c', 'd', 'e'];
array_push($arr, 'f');

복수의 아이템을 배열에 추가
$li = ['a', 'b', 'c', 'd', 'e'];
$li = array_merge($li, ['f','g']);

배열의 시작점에 아이템을 추가
$li = ['a', 'b', 'c', 'd', 'e'];
array_unshift($li,'z');

배열의 첫번째 요소를 제거
$li = ['a', 'b', 'c', 'd', 'e', 'z'];
array_shift($li);

마지막요소는 pop을 사용하여 제거한다

정렬은 array_sort(배열명), 역순정렬은 rsort를 사용한다

Java의 Map처럼 연관배열이라는 것이 존재한다. key값과 value를 넣는 것이다
배열관련 다양한 정보는 https://www.php.net/manual/en/language.types.array.php

배열은 java와 다르고 c, cpp와 유사하게 
*/
