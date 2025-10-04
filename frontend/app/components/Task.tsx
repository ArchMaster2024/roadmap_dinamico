import type { Task } from "~/types/roadmap";
import SubTaskComponent from "./SubTask";
import {
    Button,
    Modal,
    ModalContent,
    ModalHeader,
    ModalBody,
    useDisclosure
} from "@heroui/react";
import { Icon } from "@iconify/react";

interface TaskProps {
    task: Task;
}

export default function TaskComponent({ task }: TaskProps) {
    const { isOpen, onOpen, onOpenChange } = useDisclosure();

    return (
        <div className="md:mx-8 my-4 md:my-0">
            <section className="flex justify-center pb-3">
                <Button
                    isIconOnly
                    className="bg-secondary-500 w-17 h-17 shadow-sm shadow-danger-400"
                    radius="full"
                    onPress={onOpen}
                >
                    <Icon icon="material-symbols:kid-star" width={30} />
                </Button>
            </section>
            <Modal
                isOpen={isOpen}
                placement="center"
                size="sm"
                backdrop="opaque"
                className="border border-primary-500 bg-none"
                onOpenChange={onOpenChange}
            >
                <ModalContent>
                    {(onClose) => (
                        <>
                            <ModalHeader>
                                <p className="flex flex-col justity-center content-center w-full">
                                    <span className="text-center text-sm text-secondary-400">
                                        {task.title}
                                    </span>
                                    <span className="text-center text-xs text-danger-500">
                                        {task.status}
                                    </span>
                                </p>
                            </ModalHeader>
                            <ModalBody>
                                <h4 className="text-center text-lg font-bold">Subtasks</h4>
                                <ul>
                                    {task.subtasks.map((subtask) => (
                                        <SubTaskComponent key={subtask.id} subTask={subtask} />
                                    ))}
                                </ul>
                            </ModalBody>
                        </>
                    )}
                </ModalContent>
            </Modal>
        </div>
    );
}
