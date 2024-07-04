<?php

class BinaryTree
{
    /** @var TreeNode|null */
    public $root;

    /**
     * BinaryTree constructor.
     */
    function __construct()
    {
        $this->root = null;
    }

    /**
     * 插入節點
     * @param int $value
     * @return void
     */
    public function insert(int $value): void
    {
        $newNode = new TreeNode($value);
        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($this->root, $newNode);
        }
    }

    /**
     * 遞歸插入節點
     * @param TreeNode|null $node
     * @param TreeNode $newNode
     * @return void
     */
    private function insertNode(?TreeNode &$node, TreeNode &$newNode): void
    {
        if ($node === null) {
            $node = $newNode;
        } else {
            if ($newNode->val < $node->val) {
                $this->insertNode($node->left, $newNode);
            } else {
                $this->insertNode($node->right, $newNode);
            }
        }
    }

    /**
     * 前序遍歷：根左右
     * @param TreeNode|null $node
     * @return void
     */
    public function preorderTraversal(?TreeNode $node): void
    {
        if ($node !== null) {
            echo $node->val . " ";
            $this->preorderTraversal($node->left);
            $this->preorderTraversal($node->right);
        }
    }

    /**
     * 中序遍歷：左根右
     * @param TreeNode|null $node
     * @return void
     */
    public function inorderTraversal(?TreeNode $node): void
    {
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo $node->val . " ";
            $this->inorderTraversal($node->right);
        }
    }

    /**
     * 後序遍歷：左右根
     * @param TreeNode|null $node
     * @return void
     */
    public function postorderTraversal(?TreeNode $node): void
    {
        if ($node !== null) {
            $this->postorderTraversal($node->left);
            $this->postorderTraversal($node->right);
            echo $node->val . " ";
        }
    }

    /**
     * 在二叉樹中搜尋特定值
     * @param int $value 要搜尋的值
     * @param TreeNode|null $node 從此節點開始搜尋，可以為空表示從根節點開始
     * @return TreeNode|null 返回包含搜尋值的節點，如果找不到則返回null
     */
    public function search(int $value, ?TreeNode $node = null): ?TreeNode
    {
        if ($node === null) {
            $node = $this->root;
        }

        // echo 當前節點的值
        echo "當前搜尋節點：{$node->val} <br/>";

        if ($node === null || $node->val === $value) {
            return $node;
        }

        if ($value < $node->val) {
            return $this->search($value, $node->left);
        } else {
            return $this->search($value, $node->right);
        }
    }

    /**
     * 輸入預檢測數組
     * @param array $dataList 預檢測數組
     * @return void
     */
    public function insertList(array $dataList): void
    {
        foreach ($dataList as $value) {
            $this->insert($value);
        }
    }
}