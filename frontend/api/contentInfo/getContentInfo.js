import httpCommon from "@/api/httpCommon/httpCommon";

const getContentInfo = async (lang) => {
    const result = await httpCommon.get("/api/page-data", {
        headers: {
            locale: lang,
        },
    });
    return result.data;
};

export default getContentInfo;
