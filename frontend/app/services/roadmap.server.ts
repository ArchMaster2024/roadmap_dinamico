import type { User } from "~/types/roadmap";

async function getRoadmapData(userId: string): Promise<User> {
    const response = await fetch(`http://roadmap_server:80/api/roadmap/${userId}`);
    if (!response.ok) {
        throw new Response("Failed to fetch roadmap data", { status: response.status });
    }
    const data = await response.json();

    return data as User;
}

export const roadmapService = {
    getRoadmapData
};
