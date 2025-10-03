import type { Route } from "./+types/roadmap";
import { roadmapService } from "./services/roadmap.server";
import TaskComponent from "./components/Task";
import type { Step, Roadmap, Task } from "./types/roadmap";
import { Card, CardBody } from "@heroui/react";

export async function loader({ params }: Route.LoaderArgs) {
    return await roadmapService.getRoadmapData(params.user_id);
}

export default function Roadmap({
    loaderData,
}: Route.ComponentProps) {
    const { name: userName, roadmap } = loaderData;
    let context;

    if (roadmap == null || roadmap.step == null) {
        context = (
            <section>
                <p className="text-center pt-4 text-danger-500">Este usuario no tiene roadmap</p>
            </section>
        );
    } else {
        const { step } = roadmap as Roadmap;
        const { tasks } = step as Step;
        context = (
            <section className="w-full h-full flex md:flex-col flex-row justify-center content-center md:overflow-x-auto">
                <article className="pt-10 md:pt-0 flex flex-col">
                    <h2 className="text-center font-bold text-2xl text-danger-300 mb-10 md:hidden">Steps</h2>
                    <div className="flex flex-col md:flex-row justify-center content-center gap-10">
                        {tasks.map((task: Task) => (
                            <TaskComponent key={task.id} task={task} />
                        ))}
                    </div>
                </article>
            </section>
        );
    }

    return (
        <div className="w-full h-screen">
            <Card shadow="lg" className="p-3 m-2 bg-secondary-500 shadow-md shadow-danger-500 sticky top-0 z-10000">
                <CardBody>
                    <h1 className="text-center font-bold text-2xl text-white">Roadmap de {userName}</h1>
                </CardBody>
            </Card>
            {context}
        </div>
    );
}
