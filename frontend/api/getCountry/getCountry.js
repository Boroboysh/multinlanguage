import httpCommon from "@/api/httpCommon/httpCommon";

export const getCountry = async (lang) => {
    const result = await httpCommon.get("/api/countries/cities", {
        headers: {
            locale: lang,
        },
    });
    return result;
};

export const getCountrySearch = async (string) => {
    const result = await httpCommon.get("/api/search", {
        params: {
            name: string,
        },
    });
    return result;
};
