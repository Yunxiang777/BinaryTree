<?php
class TreeNode
{
    /** @var int */
    public $val;
    /** @var TreeNode|null */
    public $left;
    /** @var TreeNode|null */
    public $right;

    /**
     * TreeNode constructor.
     * @param int $value
     */
    function __construct(int $value)
    {
        $this->val = $value;
        $this->left = null;
        $this->right = null;
    }
}