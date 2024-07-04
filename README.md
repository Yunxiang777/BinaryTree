# BinaryTree
模擬SQL建立index索引後搜尋，以二元數為模擬範本。
## 作者和許可證
作者：yunXiang Wang
許可證：MIT License
## 使用
```
- 初始化
$binaryTree = new BinaryTree(); 
$testArray = [5, 3, 8, 2, 4, 7, 9]; 
$binaryTree->insertList($testArray);

- 搜尋
$searchValue = 4;
$resultNode = $binaryTree->search($searchValue);

- 前序遍歷
$binaryTree->preorderTraversal($binaryTree->root);

- 中序遍歷
$binaryTree->inorderTraversal($binaryTree->root);

- 後序遍歷
$binaryTree->postorderTraversal($binaryTree->root);
