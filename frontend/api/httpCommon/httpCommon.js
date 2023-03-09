import axios from "axios";
import env from "@/api/env/env";

const httpCommon = axios.create({
    baseURL: env.host,
});

export default httpCommon
