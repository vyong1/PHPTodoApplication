<?php
class HtmlBuilder
{
    public $content;

    function __construct()
    {
        $this->content = "";
    }

    function build($todoItemArray)
    {
        // Build up the html for each item
        foreach ($todoItemArray as $item)
        {
            $this->addTodoItem($item);
        }
    }

    function addTodoItem($todoItem)
    {
        $this->content .= '<div class="todo-item">';

        // Add buttons
        $this->content .= '<div class="todo-buttons-container">';
        // $this->content .= '<input type="checkbox""></input>';
        $this->content .= '<button class="todo-button check-button">✓</button>';
        $this->content .= '<button class="todo-button delete-button">x</button>';
        $this->content .= '<button class="todo-button hide-button">-</button>';
        $this->content .= '</div>';
        // Add todo name
        $this->content .= '<div class="todo-item-text-container">';
        $this->content .= '<div class="todo-item-text">' . $todoItem->name . '</div>';
        $this->content .= '</div>';

        $this->content .= '</div>';
    }
}
?>
