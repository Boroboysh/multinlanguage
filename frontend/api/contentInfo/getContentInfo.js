import httpCommon from "@/api/httpCommon/httpCommon";

const getContentInfo = async (lang) => {
    const result = await httpCommon.get("/api/page-data", {
        headers: {
            locale: lang,
        },
    });
    console.log(result.data)
    return result.data;
};

export default getContentInfo;
