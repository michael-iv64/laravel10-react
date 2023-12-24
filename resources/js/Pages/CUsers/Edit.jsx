import React , {useEffect} from "react";
import { Link, usePage, useForm } from "@inertiajs/react";

const Edit = (props) => {
    const  document  = usePage().props.document;
    const { data, setData, put, errors } = useForm({
        name: document.name|| "",
        content: document.content || "",
    });

    function handleSubmit(e) {
        e.preventDefault();
        put(route("update", document.id));
    }
useEffect(() => {

}, []) 
    return (
        <div className='w-full h-full rounded-md text-[#414141] text-sm px-1'>
            <div className="container flex flex-col justify-center mx-auto">
                <div>
                    <Link href={route('c-users')} className='flex justify-around items-center rounded-full w-28 h-8 border-2 border-[#3b9e1e] bg-[#3b9e1e] text-white hover:bg-green-50 hover:text-[#3b9e1e] duration-500'>Вернуться</Link>
                    <h1 className="">
                        <span className='text-xl text-[#3b9e1e]'>Обновление  документа</span>
                    </h1>
                </div>
                <div className="max-w-3xl p-8 bg-white rounded shadow">
                    <form name="createForm" onSubmit={handleSubmit}>
                        <div className="flex flex-col">
                            <div className="mb-4">
                                <label className="">Name</label>
                                <input
                                    type="text"
                                    className="w-full px-4 py-2"
                                    label="Name"
                                    name="name"
                                    value={data.name}
                                    onChange={(e) =>
                                        setData("name", e.target.value)
                                    }
                                />
                                <span className="text-red-600">
                                    {errors.name}
                                </span>
                            </div>
                            <div className="mb-4">
                                <label className="">Content</label>
                                <textarea
                                    type="text"
                                    className="w-full rounded"
                                    label="content"
                                    name="Content"
                                    errors={errors.content}
                                    value={data.content}
                                    onChange={(e) =>
                                        setData("content", e.target.value)
                                    }
                                />
                                <span className="text-red-600">
                                    {errors.content}
                                </span>
                            </div>
                        </div>
                        <div className="flex justify-between">
                            <button
                                type="submit"
                                className="'flex justify-around items-center rounded-full w-28 h-8 border-2 border-[#3b9e1e] bg-[#3b9e1e] text-white m-2 hover:bg-green-50 hover:text-[#3b9e1e] duration-500'"
                            >
                                Обновить
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    );
};

export default Edit;