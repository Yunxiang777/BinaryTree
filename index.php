<?php
require_once('./TreeNode.php');
require_once('./BinaryTree.php');

// 使用範例
$binaryTree = new BinaryTree();
$testArray = array(5, 3, 8, 2, 4, 7, 9);
$binaryTree->insertList($testArray);

// 搜尋
$searchValue = 4;
$resultNode = $binaryTree->search($searchValue);

if ($resultNode !== null) {
    echo "找到值 {$searchValue} 在二叉樹中！";
} else {
    echo "未找到值 {$searchValue} 在二叉樹中。";
}