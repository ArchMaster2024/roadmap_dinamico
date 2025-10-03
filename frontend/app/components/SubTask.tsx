import type { SubTask } from "~/types/roadmap";
import { useMemo } from "react";

interface SubTaskProps {
    subTask: SubTask;
}

const getStatusColor = (status: string) => {
    switch (status.toLowerCase()) {
        case "completed":
            return "text-success-500";
        case "in_progress":
            return "text-primary-200";
        case "pending":
            return "text-warning-400";
        case "blocked":
            return "text-danger-500";
        case "review":
            return "text-secondary-600";
    }
};

export default function SubTaskComponent({ subTask }: SubTaskProps) {
    const statusColor = useMemo(() => getStatusColor(subTask.status), [subTask.status]);

    return (
        <li>
            <p className="flex flex-col text-center justyf-center content-center w-full pb-3">
                <span className="font-bold text-md">
                    {subTask.name}
                </span>
                <span className={`text-sm ${statusColor}`}>
                    {subTask.status}
                </span>
            </p>
        </li>
    );
}
