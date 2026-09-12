<?php

// initial setup
$tasks = ["Study Japanese", "Clean my room", "Go to the gym"];
$endProgram = false;

// greet user
echo "Welcome to the tasks manager application! \n";

// create loop to run app
// display commands and ask for an action
while ($endProgram === false) {
    echo "\nChoose an action: \n\n";
    $userAction = getAction();
    switch ($userAction) {
        case "1":
            listTasks($tasks);
            break;
        case "2":
            addTask($tasks);
            break;
        case "3":
            destroyTask($tasks);
            break;
        case "4":
            exitProgram($endProgram);
            break;
        default:
            echo "Invalid action.";
    }
}

// 1 - list tasks
// 2 - create task: ask for description
// 3 - delete task: list the tasks and asks for an task id to delete
// 4 - exit

function getAction() {
    echo "Type 1 to list all tasks\nType 2 to add a new task\nType 3 to delete an existing task\nType 4 to exit the program\n";
    return readline("==> ");
}
function listTasks($tasks) {
    echo "\n------------------------------------------------------\n";
    echo "TASKS: \n";
    foreach ($tasks as $task_key => $task_value) {
        $task_key += 1;
        echo "$task_key) $task_value\n";
    }
    echo "------------------------------------------------------\n\n";
}

function addTask(&$tasks) {
    echo "\nADD TASK\n";
    $newTask = readline("Type the task description: \n==> ");
    $tasks[] = $newTask;
    echo "Task created.\n";
}

function destroyTask(&$tasks) {
    // list tasks
    listTasks($tasks);
    // ask for task id to destroy
    $taskId = (int) readline("Type the id of the task you want to delete:\n ==> ");
    $taskId--;
    
    // data validation
    if (!isset($tasks[$taskId])) { // isset usage example
        echo "Invalid task ID. \n";
        return;
    }

    //confirm and delete
    $userConfirm = readLine("\nIs the task you want to destroy: $tasks[$taskId]? Types yes to confirm or no to cancel.\n==> ");
    if ($userConfirm === "yes") {
        unset($tasks[$taskId]); // unset usage example
        $tasks = array_values($tasks); // array_values usage example
        echo "\nTask removed.\n";
    } elseif ($userConfirm === "no") {
        echo "\nThe task was not removed.\n";
    } else {
        echo "\nInvalid command\n";
    }
}

function exitProgram(&$endProgram) {
    $endProgram = true;
    echo "Exiting...\n";
}