export interface SubTask {
    id: string;
    name: string;
    status: string;
}

export interface Task {
    id: string;
    title: string;
    status: string;
    subtasks: SubTask[];
}

export interface Step {
    tasks: Task[];
}

export interface Roadmap {
    id: string;
    name: string;
    description: string;
    step: Step;
}

export interface User {
    id: string;
    name: string;
    roadmap: Roadmap;
}
