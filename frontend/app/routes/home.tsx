import type { Route } from "./+types/home";
import { redirect } from "react-router";

export async function loader({ }: Route.LoaderArgs) {
    return redirect("/roadmap/1");
}

export default function Home() {
    return null;
}
