<?php

function sum($headOfLinkedList1, $headOfLinkedList2)
{
	$headOfLinkedList1 = array_reverse(preg_split('//', $headOfLinkedList1, -1, PREG_SPLIT_NO_EMPTY));
	$headOfLinkedList2 = array_reverse(preg_split('//', $headOfLinkedList2, -1, PREG_SPLIT_NO_EMPTY));

	$result = array_map(function ($n, $m) {

		return $n + $m;

	}, $headOfLinkedList1, $headOfLinkedList2);


	return implode('', $result);

}


print_r(sum(955559, 345345345));