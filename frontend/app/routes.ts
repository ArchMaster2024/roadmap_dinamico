import { type RouteConfig, index, route } from "@react-router/dev/routes";

export default [
    index("routes/home.tsx"),
    route("/roadmap/:user_id", "./roadmap.tsx")
] satisfies RouteConfig;
