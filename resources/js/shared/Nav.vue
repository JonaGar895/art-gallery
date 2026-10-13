<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <Link
                    href="/"
                    class="text-blue-500 hover:underline"
                    :class="{ 'font-bold underline': $page.component === 'Home' }"
                >
                    Home
                </Link>
            </li>

            <li>
                <Link
                    href="/users$foo=bar&baz=buzz"
                    class="text-blue-500 hover:underline"
                    :class="{ 'font-bold underline': $page.component =='users'}"
                >
                    Users
                </Link>
            </li>

            <li>
                <Link
                    href="/setting"
                    class="text-blue-500 hover:underline"
                    :class="{ 'font-bold underline': $page.component== 'setting' }"
                >
                    Setting
                </Link>
            </li>

            <li>
                <Link
                    href="/logout"
                    method="post"
                    :data="{ foo: 'bar' }"
                    class="text-blue-500 hover:underline"
                >
                    Log out
                </Link>
            </li>
        </ul>
    </nav>
</template>


<script >
import { Link } from '@inertiajs/vue3';

export default {
    components: {Link}
}
</script>